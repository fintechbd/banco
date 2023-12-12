<?php

namespace Fintech\Banco\Repositories\Eloquent;

use Fintech\Banco\Interfaces\BeneficiaryRepository as InterfacesBeneficiaryRepository;
use Fintech\Core\Repositories\EloquentRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

/**
 * Class BeneficiaryRepository
 */
class BeneficiaryRepository extends EloquentRepository implements InterfacesBeneficiaryRepository
{
    public function __construct()
    {
        $model = app(config('fintech.banco.beneficiary_model', \Fintech\Banco\Models\Beneficiary::class));

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

        //Join
        $query->leftJoin(
            get_table('banco.beneficiary_type'),
            $modelTable.'.beneficiary_type_id', '=',
            get_table('banco.beneficiary_type').'.id');
        $query->leftJoin(
            get_table('metadata.country'),
            $modelTable.'.country_id', '=',
            get_table('metadata.country').'.id');
        $query->leftJoin(
            get_table('metadata.state'),
            $modelTable.'.state_id', '=',
            get_table('metadata.state').'.id');
        $query->leftJoin(
            get_table('metadata.city'),
            $modelTable.'.city_id', '=',
            get_table('metadata.city').'.id');
        $query->leftJoin(
            get_table('metadata.relation'),
            $modelTable.'.relation_id', '=',
            get_table('metadata.relation').'.id');
        //Searching
        if (! empty($filters['search'])) {
            if (is_numeric($filters['search'])) {
                $query->where($this->model->getKeyName(), 'like', "%{$filters['search']}%");
            } else {
                $query->where($modelTable.'.beneficiary_name', 'like', "%{$filters['search']}%");
            }
        }
        if (isset($filters['user_id']) && ! empty($filters['user_id'])) {
            $query->where($modelTable.'.user_id', $filters['user_id']);
        }

        if (isset($filters['city_id']) && ! empty($filters['city_id'])) {
            $query->where($modelTable.'.city_id', $filters['city_id']);
        }

        if (isset($filters['state_id']) && ! empty($filters['state_id'])) {
            $query->where($modelTable.'.state_id', $filters['state_id']);
        }

        if (isset($filters['country_id']) && ! empty($filters['country_id'])) {
            $query->where($modelTable.'.country_id', $filters['country_id']);
        }

        if (isset($filters['beneficiary_type_id']) && ! empty($filters['beneficiary_type_id'])) {
            $query->where($modelTable.'.beneficiary_type_id', $filters['beneficiary_type_id']);
        }

        if (isset($filters['relation_id']) && ! empty($filters['relation_id'])) {
            $query->where($modelTable.'.relation_id', $filters['relation_id']);
        }

        if (isset($filters['beneficiary_name']) && ! empty($filters['beneficiary_name'])) {
            $query->where($modelTable.'.beneficiary_name', $filters['beneficiary_name']);
        }

        if (isset($filters['beneficiary_mobile']) && ! empty($filters['beneficiary_mobile'])) {
            $query->where($modelTable.'.beneficiary_mobile', $filters['beneficiary_mobile']);
        }

        if (isset($filters['beneficiary_address']) && ! empty($filters['beneficiary_address'])) {
            $query->where($modelTable.'.beneficiary_address', $filters['beneficiary_address']);
        }

        if (isset($filters['beneficiary_enabled']) && ! empty($filters['beneficiary_enabled'])) {
            $query->where($modelTable.'.enabled', $filters['beneficiary_enabled']);
        }

        if (! empty($filters['beneficiary_id'])) {
            $query->where('id', $filters['beneficiary_id']);
        }

        if (! empty($filters['user_id'])) {
            $query->where('user_id', $filters['user_id']);
        }

        //Display Trashed
        if (isset($filters['trashed']) && $filters['trashed'] === true) {
            $query->onlyTrashed();
        }

        //Handle Sorting
        $query->orderBy($filters['sort'] ?? $modelTable.'.'.$this->model->getKeyName(), $filters['dir'] ?? 'asc');

        $select = [
            /*get_table('banco.beneficiary_type').'.*',
            get_table('metadata.country').'.*',
            get_table('metadata.state').'.*',
            get_table('metadata.city').'.*',
            get_table('metadata.relation').'.*',*/
            DB::raw(get_table('banco.beneficiary_type').'.beneficiary_type_name AS beneficiary_type_name'),
            DB::raw(get_table('metadata.country').'.name AS country_name'),
            DB::raw(get_table('metadata.state').'.name AS state_name'),
            DB::raw(get_table('metadata.city').'.name AS city_name'),
            DB::raw(get_table('metadata.relation').'.name AS relation_name'),
            $modelTable.'.*',
        ];
        $query->select($select);

        //Execute Output
        return $this->executeQuery($query, $filters);

    }
}
