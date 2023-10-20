<?php

namespace Fintech\Banco\Http\Controllers;

use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\Banco\Http\Resources\BankBranchResource;
use Fintech\Banco\Http\Resources\BankBranchCollection;
use Fintech\Banco\Http\Requests\ImportBankBranchRequest;
use Fintech\Banco\Http\Requests\StoreBankBranchRequest;
use Fintech\Banco\Http\Requests\UpdateBankBranchRequest;
use Fintech\Banco\Http\Requests\IndexBankBranchRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class BankBranchController
 * @package Fintech\Banco\Http\Controllers
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to bankBranch
 * @lrd:end
 *
 */

class BankBranchController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the bankBranch resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     * @lrd:end
     *
     * @param IndexBankBranchRequest $request
     * @return BankBranchCollection|JsonResponse
     */
    public function index(IndexBankBranchRequest $request): BankBranchCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankBranchPaginate = \Banco::bankBranch()->list($inputs);

            return new BankBranchCollection($bankBranchPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new bankBranch resource in storage.
     * @lrd:end
     *
     * @param StoreBankBranchRequest $request
     * @return JsonResponse
     * @throws StoreOperationException
     */
    public function store(StoreBankBranchRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankBranch = \Banco::bankBranch()->create($inputs);

            if (!$bankBranch) {
                throw (new StoreOperationException)->setModel(config('fintech.banco.bankBranch_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'BankBranch']),
                'id' => $bankBranch->id
             ]);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified bankBranch resource found by id.
     * @lrd:end
     *
     * @param string|int $id
     * @return BankBranchResource|JsonResponse
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): BankBranchResource|JsonResponse
    {
        try {

            $bankBranch = \Banco::bankBranch()->find($id);

            if (!$bankBranch) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bankBranch_model'), $id);
            }

            return new BankBranchResource($bankBranch);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified bankBranch resource using id.
     * @lrd:end
     *
     * @param UpdateBankBranchRequest $request
     * @param string|int $id
     * @return JsonResponse
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateBankBranchRequest $request, string|int $id): JsonResponse
    {
        try {

            $bankBranch = \Banco::bankBranch()->read($id);

            if (!$bankBranch) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bankBranch_model'), $id);
            }

            $inputs = $request->validated();

            if (!\Banco::bankBranch()->update($id, $inputs)) {

                throw (new UpdateOperationException)->setModel(config('fintech.banco.bankBranch_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'BankBranch']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified bankBranch resource using id.
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

            $bankBranch = \Banco::bankBranch()->read($id);

            if (!$bankBranch) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bankBranch_model'), $id);
            }

            if (!\Banco::bankBranch()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.banco.bankBranch_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'BankBranch']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified bankBranch resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     * @lrd:end
     *
     * @param string|int $id
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $bankBranch = \Banco::bankBranch()->find($id, true);

            if (!$bankBranch) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bankBranch_model'), $id);
            }

            if (!\Banco::bankBranch()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.banco.bankBranch_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'BankBranch']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the bankBranch resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param IndexBankBranchRequest $request
     * @return JsonResponse
     */
    public function export(IndexBankBranchRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankBranchPaginate = \Banco::bankBranch()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'BankBranch']));

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the bankBranch resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @param ImportBankBranchRequest $request
     * @return BankBranchCollection|JsonResponse
     */
    public function import(ImportBankBranchRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankBranchPaginate = \Banco::bankBranch()->list($inputs);

            return new BankBranchCollection($bankBranchPaginate);

        } catch (\Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
