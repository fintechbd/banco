<?php

namespace Fintech\Banco\Services;

//TODO if use interface its provide error then use direct repository
//use Fintech\Banco\Interfaces\BeneficiaryTypeRepository;
use Exception;
use Fintech\Banco\Repositories\Eloquent\BeneficiaryTypeRepository;
use Fintech\Core\Exceptions\RelationReturnMissingException;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use ReflectionException;
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
     * @param array $filters
     * @return Paginator|Collection
     */
    public function list(array $filters = []): Paginator|Collection
    {
        return $this->beneficiaryTypeRepository->list($filters);

    }

    /**
     * @throws ReflectionException
     * @throws BindingResolutionException
     * @throws RelationReturnMissingException
     */
    public function create(array $inputs = [])
    {
        return $this->beneficiaryTypeRepository->create($inputs);
    }

    /**
     * @param $id
     * @param bool $onlyTrashed
     * @return Model|null
     */
    public function find($id, bool $onlyTrashed = false): ?Model
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
        return $this->beneficiaryTypeRepository->create($filters);
    }
}
