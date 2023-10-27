<?php

namespace Fintech\Banco\Http\Requests;

use Fintech\Banco\Models\BeneficiaryType;
use Illuminate\Foundation\Http\FormRequest;

class StoreBeneficiaryTypeRequest extends FormRequest
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
        $uniqueRule = 'unique:'.config('fintech.banco.beneficiary_type_model', BeneficiaryType::class).',beneficiary_type_name';

        return [
            'beneficiary_type_name' => ['required', 'string', 'max:255', $uniqueRule],
            'beneficiary_type_data' => ['nullable', 'array'],
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
