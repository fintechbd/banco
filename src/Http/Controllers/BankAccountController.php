<?php

namespace Fintech\Banco\Http\Controllers;

use Exception;
use Fintech\Banco\Facades\Banco;
use Fintech\Banco\Http\Requests\ImportBankAccountRequest;
use Fintech\Banco\Http\Requests\IndexBankAccountRequest;
use Fintech\Banco\Http\Requests\StoreBankAccountRequest;
use Fintech\Banco\Http\Requests\UpdateBankAccountRequest;
use Fintech\Banco\Http\Resources\BankAccountCollection;
use Fintech\Banco\Http\Resources\BankAccountResource;
use Fintech\Core\Exceptions\DeleteOperationException;
use Fintech\Core\Exceptions\RestoreOperationException;
use Fintech\Core\Exceptions\StoreOperationException;
use Fintech\Core\Exceptions\UpdateOperationException;
use Fintech\Core\Traits\ApiResponseTrait;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class BankAccountController
 *
 * @lrd:start
 * This class handle create, display, update, delete & restore
 * operation related to BankAccount
 *
 * @lrd:end
 */
class BankAccountController extends Controller
{
    use ApiResponseTrait;

    /**
     * @lrd:start
     * Return a listing of the *BankAccount* resource as collection.
     *
     * *```paginate=false``` returns all resource as list not pagination*
     *
     * @lrd:end
     */
    public function index(IndexBankAccountRequest $request): BankAccountCollection|JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankAccountPaginate = Banco::bankAccount()->list($inputs);

            return new BankAccountCollection($bankAccountPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a new *BankAccount* resource in storage.
     *
     * @lrd:end
     *
     * @throws StoreOperationException
     */
    public function store(StoreBankAccountRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankAccount = Banco::bankAccount()->create($inputs);

            if (! $bankAccount) {
                throw (new StoreOperationException)->setModel(config('fintech.banco.bank_account_model'));
            }

            return $this->created([
                'message' => __('core::messages.resource.created', ['model' => 'Bank Account']),
                'id' => $bankAccount->id,
            ]);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Return a specified *BankAccount* resource found by id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     */
    public function show(string|int $id): BankAccountResource|JsonResponse
    {
        try {

            $bankAccount = Banco::bankAccount()->find($id);

            if (! $bankAccount) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bank_account_model'), $id);
            }

            return new BankAccountResource($bankAccount);

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Update a specified *BankAccount* resource using id.
     *
     * @lrd:end
     *
     * @throws ModelNotFoundException
     * @throws UpdateOperationException
     */
    public function update(UpdateBankAccountRequest $request, string|int $id): JsonResponse
    {
        try {

            $bankAccount = Banco::bankAccount()->find($id);

            if (! $bankAccount) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bank_account_model'), $id);
            }

            $inputs = $request->validated();

            if (! Banco::bankAccount()->update($id, $inputs)) {

                throw (new UpdateOperationException)->setModel(config('fintech.banco.bank_account_model'), $id);
            }

            return $this->updated(__('core::messages.resource.updated', ['model' => 'Bank Account']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Soft delete a specified *BankAccount* resource using id.
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

            $bankAccount = Banco::bankAccount()->find($id);

            if (! $bankAccount) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bank_account_model'), $id);
            }

            if (! Banco::bankAccount()->destroy($id)) {

                throw (new DeleteOperationException())->setModel(config('fintech.banco.bank_account_model'), $id);
            }

            return $this->deleted(__('core::messages.resource.deleted', ['model' => 'Bank Account']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Restore the specified *BankAccount* resource from trash.
     * ** ```Soft Delete``` needs to enabled to use this feature**
     *
     * @lrd:end
     *
     * @return JsonResponse
     */
    public function restore(string|int $id)
    {
        try {

            $bankAccount = Banco::bankAccount()->find($id, true);

            if (! $bankAccount) {
                throw (new ModelNotFoundException)->setModel(config('fintech.banco.bank_account_model'), $id);
            }

            if (! Banco::bankAccount()->restore($id)) {

                throw (new RestoreOperationException())->setModel(config('fintech.banco.bank_account_model'), $id);
            }

            return $this->restored(__('core::messages.resource.restored', ['model' => 'Bank Account']));

        } catch (ModelNotFoundException $exception) {

            return $this->notfound($exception->getMessage());

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *BankAccount* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     */
    public function export(IndexBankAccountRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankAccountPaginate = Banco::bankAccount()->export($inputs);

            return $this->exported(__('core::messages.resource.exported', ['model' => 'Bank Account']));

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }

    /**
     * @lrd:start
     * Create a exportable list of the *BankAccount* resource as document.
     * After export job is done system will fire  export completed event
     *
     * @lrd:end
     *
     * @return BankAccountCollection|JsonResponse
     */
    public function import(ImportBankAccountRequest $request): JsonResponse
    {
        try {
            $inputs = $request->validated();

            $bankAccountPaginate = Banco::bankAccount()->list($inputs);

            return new BankAccountCollection($bankAccountPaginate);

        } catch (Exception $exception) {

            return $this->failed($exception->getMessage());
        }
    }
}
