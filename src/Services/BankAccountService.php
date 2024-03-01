<?php

namespace Fintech\Banco\Services;


use Fintech\Banco\Interfaces\BankAccountRepository;

/**
 * Class BankAccountService
 * @package Fintech\Banco\Services
 *
 */
class BankAccountService
{
    /**
     * BankAccountService constructor.
     * @param BankAccountRepository $bankAccountRepository
     */
    public function __construct(BankAccountRepository $bankAccountRepository) {
        $this->bankAccountRepository = $bankAccountRepository;
    }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        return $this->bankAccountRepository->list($filters);

    }

    public function create(array $inputs = [])
    {
        return $this->bankAccountRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->bankAccountRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->bankAccountRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->bankAccountRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->bankAccountRepository->restore($id);
    }

    public function export(array $filters)
    {
        return $this->bankAccountRepository->list($filters);
    }

    public function import(array $filters)
    {
        return $this->bankAccountRepository->create($filters);
    }
}
