<?php

namespace Fintech\Banco\Repositories\Eloquent;

use Fintech\Banco\Interfaces\BankBranchRepository as InterfacesBankBranchRepository;
use Fintech\Core\Repositories\EloquentRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * Class BankBranchRepository
 */
class BankBranchRepository extends EloquentRepository implements InterfacesBankBranchRepository
{
    public function __construct()
    {
        $model = app(config('fintech.banco.bank_branch_model', \Fintech\Banco\Models\BankBranch::class));

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

        //Searching
        if (! empty($filters['search'])) {
            if (is_numeric($filters['search'])) {
                $query->where($this->model->getKeyName(), 'like', "%{$filters['search']}%");
            } else {
                $query->where('name', 'like', "%{$filters['search']}%");
                $query->where('bank_branch_data', 'like', "%{$filters['search']}%");
            }
        }

        if (! empty($filters['bank_id'])) {
            $query->where('bank_id', '=', $filters['bank_id']);
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
