<?php

namespace Fintech\Banco\Repositories\Eloquent;

use Fintech\Banco\Interfaces\BeneficiaryTypeRepository as InterfacesBeneficiaryTypeRepository;
use Fintech\Core\Repositories\EloquentRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * Class BeneficiaryTypeRepository
 */
class BeneficiaryTypeRepository extends EloquentRepository implements InterfacesBeneficiaryTypeRepository
{
    public function __construct()
    {
        $model = app(config('fintech.banco.beneficiary_type_model', \Fintech\Banco\Models\BeneficiaryType::class));

        if (! $model instanceof Model) {
            throw new InvalidArgumentException("Eloquent repository require model class to be `Illuminate\Database\Eloquent\Model` instance.");
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
        $modelTable = $this->model->getTable();

        //Searching
        if (! empty($filters['search'])) {
            if (is_numeric($filters['search'])) {
                $query->where($this->model->getKeyName(), 'like', "%{$filters['search']}%");
            } else {
                $query->where($modelTable . '.beneficiary_type_name', 'like', "%{$filters['search']}%");
            }
        }

        if (isset($filters['beneficiary_type_name']) && ! empty($filters['beneficiary_type_name'])) {
            $query->where($modelTable . '.beneficiary_type_name', $filters['beneficiary_type_name']);
        }

        if (isset($filters['id']) && ! empty($filters['id'])) {
            $query->where($modelTable . '.id', $filters['id']);
        }

        //Display Trashed
        if (isset($filters['trashed']) && $filters['trashed'] === true) {
            $query->onlyTrashed();
        }

        //Handle Sorting
        $query->orderBy($filters['sort'] ?? $this->model->getKeyName(), $filters['dir'] ?? 'asc');

        //Execute Output
        return $this->executeQuery($query, $filters);

    }
}
