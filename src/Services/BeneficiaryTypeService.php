<?php

namespace Fintech\Banco\Services;

//TODO if use interface its provide error then use direct repository
//use Fintech\Banco\Interfaces\BeneficiaryTypeRepository;
use Exception;
use Fintech\Banco\Repositories\Eloquent\BeneficiaryTypeRepository;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Throwable;

/**
 * Class BeneficiaryTypeService
 */
class BeneficiaryTypeService
{
    /**
     * BeneficiaryTypeService constructor.
     */
    public function __construct(private readonly BeneficiaryTypeRepository $beneficiaryTypeRepository)
    {
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        return $this->beneficiaryTypeRepository->list($filters);

    }

    public function create(array $inputs = [])
    {
        return $this->beneficiaryTypeRepository->create($inputs);
    }

    /**
     * @param $id
     * @param $onlyTrashed
     * @return Model|null
     */
    public function find($id, $onlyTrashed = false): ?Model
    {
        return $this->beneficiaryTypeRepository->find($id, $onlyTrashed);
    }

    /**
     * @throws Exception
     */
    public function update($id, array $inputs = []): ?Model
    {
        return $this->beneficiaryTypeRepository->update($id, $inputs);
    }

    /**
     * @throws Throwable
     */
    public function destroy($id): ?bool
    {
        return $this->beneficiaryTypeRepository->delete($id);
    }

    /**
     * @param $id
     * @return bool
     */
    public function restore($id): bool
    {
        return $this->beneficiaryTypeRepository->restore($id);
    }

    /**
     * @param array $filters
     * @return Paginator|Collection
     */
    public function export(array $filters): Paginator|Collection
    {
        return $this->beneficiaryTypeRepository->list($filters);
    }

    public function import(array $filters)
    {
        return $this->permissionRepository->create($filters);
    }
}
