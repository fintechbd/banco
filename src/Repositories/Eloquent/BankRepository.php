<?php

namespace Fintech\Banco\Repositories\Eloquent;

use Fintech\Banco\Interfaces\BankRepository as InterfacesBankRepository;
use Fintech\Core\Repositories\EloquentRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

/**
 * Class BankRepository
 */
class BankRepository extends EloquentRepository implements InterfacesBankRepository
{
    public function __construct()
    {
        $model = app(config('fintech.banco.bank_model', \Fintech\Banco\Models\Bank::class));

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
        if (isset($filters['search']) && ! empty($filters['search'])) {
            if (is_numeric($filters['search'])) {
                $query->where($this->model->getKeyName(), 'like', "%{$filters['search']}%");
            } else {
                $query->where('name', 'like', "%{$filters['search']}%");
                $query->orWhere('bank_data', 'like', "%{$filters['search']}%");
                $query->orWhere('category', 'like', "%{$filters['search']}%");
                $query->orWhere('transaction_type', 'like', "%{$filters['search']}%");
                $query->orWhere('currency', 'like', "%{$filters['search']}%");
            }
        }

        if (isset($filters['country_id']) && !empty($filters['country_id'])) {
            $query->where('country_id', '=', $filters['country_id']);
        }

        if (isset($filters['currency']) && !empty($filters['currency'])) {
            $query->where('currency', '=', $filters['currency']);
        }

        if (isset($filters['transaction_type']) && !empty($filters['transaction_type'])) {
            $query->where('transaction_type', '=', $filters['transaction_type']);
        }
        if (isset($filters['category']) && !empty($filters['category'])) {
            $query->where('category', '=', $filters['category']);
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
