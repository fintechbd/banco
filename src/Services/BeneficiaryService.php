<?php

namespace Fintech\Banco\Services;

use Fintech\Banco\Interfaces\BeneficiaryRepository;

/**
 * Class BeneficiaryService
 */
class BeneficiaryService
{
    /**
     * BeneficiaryService constructor.
     */
    public function __construct(private readonly BeneficiaryRepository $beneficiaryRepository)
    {
    }

    /**
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
