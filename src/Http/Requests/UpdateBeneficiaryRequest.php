<?php

namespace Fintech\Banco\Http\Requests;

use Fintech\Banco\Models\Beneficiary;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBeneficiaryRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        /** @phpstan-ignore-next-line */
        $beneficiary_id = (int) collect(request()->segments())->last(); //id of the resource
        $uniqueRule = 'unique:'.config('fintech.banco.beneficiary_model', Beneficiary::class).',beneficiary_mobile,'.$beneficiary_id.',id,beneficiary_type_id,'.$this->beneficiary_type_id[0].',deleted_at,NULL';

        return [
            'user_id' => ['required', 'integer'],
            'city_id' => ['required', 'integer'],
            'state_id' => ['required', 'integer'],
            'country_id' => ['required', 'integer'],
            'beneficiary_type_id' => ['required', 'integer'],
            'beneficiary_name' => ['required', 'string', 'max:255'],
            'beneficiary_relation' => ['required', 'string', 'max:255'],
            'beneficiary_mobile' => ['required', 'string', $uniqueRule],
            'beneficiary_address' => ['nullable', 'string'],
            'beneficiary_data' => ['nullable', 'array'],
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
