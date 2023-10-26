<?php

namespace Fintech\Banco\Services;


use Fintech\Banco\Interfaces\BeneficiaryRepository;

/**
 * Class BeneficiaryService
 * @package Fintech\Banco\Services
 *
 */
class BeneficiaryService
{
    /**
     * BeneficiaryService constructor.
     * @param BeneficiaryRepository $beneficiaryRepository
     */
    public function __construct(BeneficiaryRepository $beneficiaryRepository) {
        $this->beneficiaryRepository = $beneficiaryRepository;
    }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        return $this->beneficiaryRepository->list($filters);

    }

    public function create(array $inputs = [])
    {
        return $this->beneficiaryRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->beneficiaryRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->beneficiaryRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->beneficiaryRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->beneficiaryRepository->restore($id);
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
