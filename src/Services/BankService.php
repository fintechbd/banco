<?php

namespace Fintech\Banco\Services;


use Fintech\Banco\Interfaces\BankRepository;

/**
 * Class BankService
 * @package Fintech\Banco\Services
 *
 */
class BankService
{
    /**
     * BankService constructor.
     * @param BankRepository $bankRepository
     */
    public function __construct(BankRepository $bankRepository) {
        $this->bankRepository = $bankRepository;
    }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        return $this->bankRepository->list($filters);

    }

    public function create(array $inputs = [])
    {
        return $this->bankRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->bankRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->bankRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->bankRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->bankRepository->restore($id);
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
