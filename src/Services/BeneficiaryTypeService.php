<?php

namespace Fintech\Banco\Services;


use Fintech\Banco\Interfaces\BeneficiaryTypeRepository;

/**
 * Class BeneficiaryTypeService
 * @package Fintech\Banco\Services
 *
 */
class BeneficiaryTypeService
{
    /**
     * BeneficiaryTypeService constructor.
     * @param BeneficiaryTypeRepository $beneficiaryTypeRepository
     */
    public function __construct(BeneficiaryTypeRepository $beneficiaryTypeRepository) {
        $this->beneficiaryTypeRepository = $beneficiaryTypeRepository;
    }

    /**
     * @param array $filters
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

    public function find($id, $onlyTrashed = false)
    {
        return $this->beneficiaryTypeRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->beneficiaryTypeRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->beneficiaryTypeRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->beneficiaryTypeRepository->restore($id);
    }

    public function export(array $filters)
    {
        return $this->permissionRepository->list($filters);
    }

    public function import(array $filters)
    {
        return $this->permissionRepository->create($filters);
    }
}
