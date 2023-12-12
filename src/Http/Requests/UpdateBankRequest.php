<?php

namespace Fintech\Banco\Http\Requests;

use Fintech\Banco\Models\Bank;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBankRequest extends FormRequest
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
        $uniqueRule = 'unique:'.config('fintech.banco.bank_model', Bank::class).',name,'.$this->route('bank').',id,country_id,'.$this->input('country_id').',deleted_at,null';

        return [
            'country_id' => ['required', 'integer'],
            'beneficiary_type_id' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255', $uniqueRule],
            'category' => ['required', 'string', 'max:255'],
            'transaction_type' => ['nullable', 'string', 'max:255'],
            'currency' => ['required', 'string', 'min:3', 'max:3'],
            'logo_png' => ['nullable', 'string'],
            'logo_svg' => ['nullable', 'string'],
            'bank_data' => ['nullable', 'array'],
            'enabled' => ['nullable', 'boolean'],
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
