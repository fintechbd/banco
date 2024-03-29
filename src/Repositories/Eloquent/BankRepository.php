<?php

namespace Fintech\Banco\Repositories\Eloquent;

use Fintech\Banco\Interfaces\BankRepository as InterfacesBankRepository;
use Fintech\Banco\Models\Bank;
use Fintech\Core\Repositories\EloquentRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\JoinClause;

/**
 * Class BankRepository
 */
class BankRepository extends EloquentRepository implements InterfacesBankRepository
{
    public function __construct()
    {
        parent::__construct(config('fintech.banco.bank_model', Bank::class));
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
                $query->orWhere('bank_data', 'like', "%{$filters['search']}%");
                $query->orWhere('category', 'like', "%{$filters['search']}%");
                $query->orWhere('transaction_type', 'like', "%{$filters['search']}%");
                $query->orWhere('currency', 'like', "%{$filters['search']}%");
            }
        }

        if (! empty($filters['country_id'])) {
            $query->where('country_id', '=', $filters['country_id']);
        }

        if (! empty($filters['currency'])) {
            $query->where('currency', '=', $filters['currency']);
        }

        if (! empty($filters['transaction_type'])) {
            $query->where('transaction_type', '=', $filters['transaction_type']);
        }

        if (! empty($filters['beneficiary_type_id'])) {
            $query->select('banks.*')
                ->join('bank_beneficiary_type', function (JoinClause $join) use ($filters) {
                    return $join->on('banks.id', '=', 'bank_beneficiary_type.bank_id')
                        ->where('bank_beneficiary_type.beneficiary_type_id', $filters['beneficiary_type_id']);
                });
        }

        if (! empty($filters['category'])) {
            $query->where('category', '=', $filters['category']);
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
