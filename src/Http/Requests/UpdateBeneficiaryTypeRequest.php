<?php

namespace Fintech\Banco\Http\Requests;

use Fintech\Banco\Models\BeneficiaryType;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBeneficiaryTypeRequest extends FormRequest
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
        /** @phpstan-ignore-next-line */
        $beneficiary_type_id = (int) collect(request()->segments())->last(); //id of the resource

        $uniqueRule = 'unique:'.config('fintech.banco.beneficiary_type_model', BeneficiaryType::class).',beneficiary_type_name,'.$beneficiary_type_id.',id,deleted_at,NULL';

        return [
            'beneficiary_type_name' => ['required', 'string', 'max:255', $uniqueRule],
            'beneficiary_type_data' => ['required', 'array'],
            'beneficiary_type_data.user_beneficiary_type_condition_name.*' => ['nullable', 'string'],
            'beneficiary_type_data.user_beneficiary_type_condition_field_name.*' => ['nullable', 'string'],
            'beneficiary_type_data.user_beneficiary_type_condition_field_type.*' => ['nullable', 'string'],
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
