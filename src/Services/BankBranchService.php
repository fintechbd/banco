<?php

namespace Fintech\Banco\Services;


use Fintech\Banco\Interfaces\BankBranchRepository;

/**
 * Class BankBranchService
 * @package Fintech\Banco\Services
 *
 */
class BankBranchService
{
    /**
     * BankBranchService constructor.
     * @param BankBranchRepository $bankBranchRepository
     */
    public function __construct(BankBranchRepository $bankBranchRepository) {
        $this->bankBranchRepository = $bankBranchRepository;
    }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        return $this->bankBranchRepository->list($filters);

    }

    public function create(array $inputs = [])
    {
        return $this->bankBranchRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->bankBranchRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->bankBranchRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->bankBranchRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->bankBranchRepository->restore($id);
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
