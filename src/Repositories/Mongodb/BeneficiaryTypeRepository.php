<?php

namespace Fintech\Banco\Repositories\Mongodb;

use Fintech\Banco\Interfaces\BeneficiaryTypeRepository as InterfacesBeneficiaryTypeRepository;
use Fintech\Banco\Models\BeneficiaryType;
use Fintech\Core\Repositories\MongodbRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use InvalidArgumentException;
use MongoDB\Laravel\Eloquent\Model;

/**
 * Class BeneficiaryTypeRepository
 */
class BeneficiaryTypeRepository extends MongodbRepository implements InterfacesBeneficiaryTypeRepository
{
    public function __construct()
    {
        $model = app(config('fintech.banco.beneficiary_type_model', BeneficiaryType::class));

        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Mongodb repository require model class to be `MongoDB\Laravel\Eloquent\Model` instance.");
        }

        $this->model = $model;
    }

    /**
     * return a list or pagination of items from
     * filtered options
     *
     * @return Paginator|Collection
     */
    public function list(array $filters = [])
    {
        $query = $this->model->newQuery();

        //Searching
        if (isset($filters['search']) && ! empty($filters['search'])) {
            if (is_numeric($filters['search'])) {
                $query->where($this->model->getKeyName(), 'like', "%{$filters['search']}%");
            } else {
                $query->where('name', 'like', "%{$filters['search']}%");
            }
        }

        //Display Trashed
        if (isset($filters['trashed']) && ! empty($filters['trashed'])) {
            $query->onlyTrashed();
        }

        //Handle Sorting
        $query->orderBy($filters['sort'] ?? $this->model->getKeyName(), $filters['dir'] ?? 'asc');

        //Execute Output
        return $this->executeQuery($query, $filters);

    }
}
