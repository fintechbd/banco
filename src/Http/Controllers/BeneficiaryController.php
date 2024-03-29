<?php

namespace Fintech\Banco\Http\Controllers;

use Exception;
use Fintech\Banco\Events\BeneficiaryAdded;
use Fintech\Banco\Facades\Banco;
use Fintech\Banco\Http\Requests\ImportBeneficiaryRequest;
use Fintech\Banco\Http\Requests\IndexBeneficiaryRequest;
use Fintech\Banco\Http\Requests\StoreBeneficiaryRequest;
use Fintech\Banco\Http\Requests\UpdateBeneficiaryRequest;
use Fintech\Banco\Http\Resources\BeneficiaryCollection;
use Fintech\Banco\Http\Resources\BeneficiaryResource;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class BeneficiaryController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to Beneficiary
 *
 * @lrd:end
 */
class BeneficiaryController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the *Beneficiary* resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexBeneficiaryRequest $request): BeneficiaryCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $inputs['sort'] = 'beneficiaries.id';
            $beneficiaryPaginate = Banco::beneficiary()->list($inputs);

            return new BeneficiaryCollection($beneficiaryPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new *Beneficiary* resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreBeneficiaryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $beneficiary = Banco::beneficiary()->create($inputs);

            if (! $beneficiary) {
                throw (new StoreOperationException)->setModel(config('fintech.banco.beneficiary_model'));
            }
            event(new BeneficiaryAdded($request->user(), $beneficiary));

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Beneficiary']),
                'id' => $beneficiary->getKey(),
            ]);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified *Beneficiary* resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): BeneficiaryResource|JsonResponse
    {
        try {

            $beneficiary = Banco::beneficiary()->find($id);

            if (! $beneficiary) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            return new BeneficiaryResource($beneficiary);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified *Beneficiary* resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateBeneficiaryRequest $request, string|int $id): JsonResponse
    {
        try {

            $beneficiary = Banco::beneficiary()->find($id);

            if (! $beneficiary) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            $inputs = $request->validated();

            if (! Banco::beneficiary()->update($id, $inputs)) {

                throw (new UpdateOperationException)->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Beneficiary']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified *Beneficiary* resource using id.
     *
     * @lrd:end
     *
     * @return JsonResponse
     *
     * @throws ModelNotFoundException
     * @throws DeleteOperationException
     */
    public function destroy(string|int $id)
    {
        try {

            $beneficiary = Banco::beneficiary()->find($id);

            if (! $beneficiary) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            if (! Banco::beneficiary()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Beneficiary']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified *Beneficiary* resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $beneficiary = Banco::beneficiary()->find($id, true);

            if (! $beneficiary) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            if (! Banco::beneficiary()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.banco.beneficiary_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Beneficiary']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *Beneficiary* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexBeneficiaryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $beneficiaryPaginate = Banco::beneficiary()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Beneficiary']));

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *Beneficiary* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return BeneficiaryCollection|JsonResponse
     */
    public function import(ImportBeneficiaryRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $beneficiaryPaginate = Banco::beneficiary()->list($inputs);

            return new BeneficiaryCollection($beneficiaryPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
