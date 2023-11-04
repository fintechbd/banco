<?php

namespace Fintech\Banco\Http\Requests;

use Fintech\Banco\Models\Bank;
use Illuminate\Foundation\Http\FormRequest;

class ImportBankRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $uniqueRule = 'unique:'.config('fintech.banco.bank_model', Bank::class).',bank_name,id';

        return [
            'country_id' => ['required', 'integer'],
            'beneficiary_type_id' => ['required', 'integer'],
            'bank_name' => ['required', 'string', 'max:255', $uniqueRule],
            'bank_category' => ['required', 'string', 'max:255'],
            'transaction_type' => ['nullable', 'string', 'max:255'],
            'bank_currency' => ['required', 'string', 'min:3', 'max:3'],
            'bank_data' => ['required', 'array'],
            'bank_data.bank_image.*' => ['nullable', 'string'],
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
