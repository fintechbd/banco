<?php

namespace Fintech\Banco\Http\Controllers;

use Exception;
use Fintech\Banco\Facades\Banco;
use Fintech\Banco\Http\Requests\ImportBankRequest;
use Fintech\Banco\Http\Requests\IndexBankRequest;
use Fintech\Banco\Http\Requests\StoreBankRequest;
use Fintech\Banco\Http\Requests\UpdateBankRequest;
use Fintech\Banco\Http\Resources\BankCollection;
use Fintech\Banco\Http\Resources\BankResource;
use Fintech\Core\Traits\ApiResponseTrait;
use Fintech\CoreExceptions\DeleteOperationException;
use Fintech\CoreExceptions\RestoreOperationException;
use Fintech\CoreExceptions\StoreOperationException;
use Fintech\CoreExceptions\UpdateOperationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class BankController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to bank
 *
 * @lrd:end
 */
class BankController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the bank resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexBankRequest $request): BankCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankPaginate = Banco::bank()->list($inputs);

            return new BankCollection($bankPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new bank resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreBankRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bank = Banco::bank()->create($inputs);

            if (! $bank) {
                throw (new StoreOperationException)->setModel(config('fintech.banco.bank_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Bank']),
                'id' => $bank->id,
            ]);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified bank resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): BankResource|JsonResponse
    {
        try {

            $bank = Banco::bank()->find($id);

            if (! $bank) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bank_model'), $id);
            }

            return new BankResource($bank);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified bank resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateBankRequest $request, string|int $id): JsonResponse
    {
        try {

            $bank = \Banco::bank()->read($id);

            if (! $bank) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bank_model'), $id);
            }

            $inputs = $request->validated();

            if (! \Banco::bank()->update($id, $inputs)) {

                throw (new UpdateOperationException)->setModel(config('fintech.banco.bank_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Bank']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified bank resource using id.
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

            $bank = \Banco::bank()->read($id);

            if (! $bank) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bank_model'), $id);
            }

            if (! \Banco::bank()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.banco.bank_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Bank']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified bank resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $bank = \Banco::bank()->find($id, true);

            if (! $bank) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bank_model'), $id);
            }

            if (! \Banco::bank()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.banco.bank_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Bank']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the bank resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexBankRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankPaginate = \Banco::bank()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Bank']));

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the bank resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return BankCollection|JsonResponse
     */
    public function import(ImportBankRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankPaginate = \Banco::bank()->list($inputs);

            return new BankCollection($bankPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
