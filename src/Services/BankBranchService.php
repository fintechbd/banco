<?php

namespace Fintech\Banco\Services;

use Fintech\Banco\Interfaces\BankBranchRepository;

/**
 * Class BankBranchService
 */
class BankBranchService
{
    /**
     * BankBranchService constructor.
     */
    public function __construct(private readonly BankBranchRepository $bankBranchRepository)
    {
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
        return $this->bankBranchRepository->list($filters);
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        return $this->bankBranchRepository->list($filters);

    }

    public function import(array $filters)
    {
        return $this->bankBranchRepository->create($filters);
    }

    public function create(array $inputs = [])
    {
        return $this->bankBranchRepository->create($inputs);
    }
}
