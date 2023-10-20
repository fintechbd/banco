<?php

namespace Fintech\Banco\Http\Controllers;

use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\Banco\Http\Resources\BeneficiaryTypeResource;
use Fintech\Banco\Http\Resources\BeneficiaryTypeCollection;
use Fintech\Banco\Http\Requests\ImportBeneficiaryTypeRequest;
use Fintech\Banco\Http\Requests\StoreBeneficiaryTypeRequest;
use Fintech\Banco\Http\Requests\UpdateBeneficiaryTypeRequest;
use Fintech\Banco\Http\Requests\IndexBeneficiaryTypeRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class BeneficiaryTypeController
 * @package Fintech\Banco\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to beneficiaryType
 * @lrd:end
 *
 */

class BeneficiaryTypeController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the beneficiaryType resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     * @lrd:end
     *
     * @param IndexBeneficiaryTypeRequest $request
     * @return BeneficiaryTypeCollection|JsonResponse
     */
    public function index(IndexBeneficiaryTypeRequest $request): BeneficiaryTypeCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $beneficiaryTypePaginate = \Banco::beneficiaryType()->list($inputs);

            return new BeneficiaryTypeCollection($beneficiaryTypePaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new beneficiaryType resource in storage.
     * @lrd:end
     *
     * @param StoreBeneficiaryTypeRequest $request
     * @return JsonResponse
     * @throws StoreOperationException
     */
    public function store(StoreBeneficiaryTypeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $beneficiaryType = \Banco::beneficiaryType()->create($inputs);

            if (!$beneficiaryType) {
                throw (new StoreOperationException)->setModel(config('fintech.banco.beneficiaryType_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'BeneficiaryType']),
                'id' => $beneficiaryType->id
             ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified beneficiaryType resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return BeneficiaryTypeResource|JsonResponse
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): BeneficiaryTypeResource|JsonResponse
    {
        try {

            $beneficiaryType = \Banco::beneficiaryType()->find($id);

            if (!$beneficiaryType) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiaryType_model'), $id);
            }

            return new BeneficiaryTypeResource($beneficiaryType);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified beneficiaryType resource using id.
     * @lrd:end
     *
     * @param UpdateBeneficiaryTypeRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateBeneficiaryTypeRequest $request, string|int $id): JsonResponse
    {
        try {

            $beneficiaryType = \Banco::beneficiaryType()->read($id);

            if (!$beneficiaryType) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiaryType_model'), $id);
            }

            $inputs = $request->validated();

            if (!\Banco::beneficiaryType()->update($id, $inputs)) {

                throw (new UpdateOperationException)->setModel(config('fintech.banco.beneficiaryType_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'BeneficiaryType']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified beneficiaryType resource using id.
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     * @throws ModelNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id)
    {
        try {

            $beneficiaryType = \Banco::beneficiaryType()->read($id);

            if (!$beneficiaryType) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiaryType_model'), $id);
            }

            if (!\Banco::beneficiaryType()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.banco.beneficiaryType_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'BeneficiaryType']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified beneficiaryType resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $beneficiaryType = \Banco::beneficiaryType()->find($id, true);

            if (!$beneficiaryType) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiaryType_model'), $id);
            }

            if (!\Banco::beneficiaryType()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.banco.beneficiaryType_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'BeneficiaryType']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the beneficiaryType resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param IndexBeneficiaryTypeRequest $request
     * @return JsonResponse
     */
    public function export(IndexBeneficiaryTypeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $beneficiaryTypePaginate = \Banco::beneficiaryType()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'BeneficiaryType']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the beneficiaryType resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param ImportBeneficiaryTypeRequest $request
     * @return BeneficiaryTypeCollection|JsonResponse
     */
    public function import(ImportBeneficiaryTypeRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $beneficiaryTypePaginate = \Banco::beneficiaryType()->list($inputs);

            return new BeneficiaryTypeCollection($beneficiaryTypePaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
