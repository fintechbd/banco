<?php

namespace Fintech\Banco\Http\Controllers;

use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\Banco\Http\Resources\BeneficiaryResource;
use Fintech\Banco\Http\Resources\BeneficiaryCollection;
use Fintech\Banco\Http\Requests\ImportBeneficiaryRequest;
use Fintech\Banco\Http\Requests\StoreBeneficiaryRequest;
use Fintech\Banco\Http\Requests\UpdateBeneficiaryRequest;
use Fintech\Banco\Http\Requests\IndexBeneficiaryRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class BeneficiaryController
 * @package Fintech\Banco\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to beneficiary
 * @lrd:end
 *
 */

class BeneficiaryController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the beneficiary resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     * @lrd:end
     *
     * @param IndexBeneficiaryRequest $request
     * @return BeneficiaryCollection|JsonResponse
     */
    public function index(IndexBeneficiaryRequest $request): BeneficiaryCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $beneficiaryPaginate = \Banco::beneficiary()->list($inputs);

            return new BeneficiaryCollection($beneficiaryPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new beneficiary resource in storage.
     * @lrd:end
     *
     * @param StoreBeneficiaryRequest $request
     * @return JsonResponse
     * @throws StoreOperationException
     */
    public function store(StoreBeneficiaryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $beneficiary = \Banco::beneficiary()->create($inputs);

            if (!$beneficiary) {
                throw (new StoreOperationException)->setModel(config('fintech.banco.beneficiary_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Beneficiary']),
                'id' => $beneficiary->id
             ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified beneficiary resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return BeneficiaryResource|JsonResponse
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): BeneficiaryResource|JsonResponse
    {
        try {

            $beneficiary = \Banco::beneficiary()->find($id);

            if (!$beneficiary) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            return new BeneficiaryResource($beneficiary);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified beneficiary resource using id.
     * @lrd:end
     *
     * @param UpdateBeneficiaryRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateBeneficiaryRequest $request, string|int $id): JsonResponse
    {
        try {

            $beneficiary = \Banco::beneficiary()->read($id);

            if (!$beneficiary) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            $inputs = $request->validated();

            if (!\Banco::beneficiary()->update($id, $inputs)) {

                throw (new UpdateOperationException)->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Beneficiary']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified beneficiary resource using id.
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

            $beneficiary = \Banco::beneficiary()->read($id);

            if (!$beneficiary) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            if (!\Banco::beneficiary()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Beneficiary']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified beneficiary resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $beneficiary = \Banco::beneficiary()->find($id, true);

            if (!$beneficiary) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            if (!\Banco::beneficiary()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Beneficiary']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the beneficiary resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param IndexBeneficiaryRequest $request
     * @return JsonResponse
     */
    public function export(IndexBeneficiaryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $beneficiaryPaginate = \Banco::beneficiary()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Beneficiary']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the beneficiary resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param ImportBeneficiaryRequest $request
     * @return BeneficiaryCollection|JsonResponse
     */
    public function import(ImportBeneficiaryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $beneficiaryPaginate = \Banco::beneficiary()->list($inputs);

            return new BeneficiaryCollection($beneficiaryPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
