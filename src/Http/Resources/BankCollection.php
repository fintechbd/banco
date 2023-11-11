<?php

namespace Fintech\Banco\Http\Resources;

use Fintech\Core\Supports\Constant;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @method getKey()
 * @method getFirstMediaUrl(string $string)
 * @property integer $country_id
 * @property string $country
 * @property integer $beneficiary_type_id
 * @property string $beneficiary_type
 * @property string $name
 * @property string $category
 * @property string $transaction_type
 * @property string $currency
 * @property array $bank_data
 * @property boolean $enabled
 * @property mixed $links
 * @property mixed $created_at
 * @property mixed $updated_at
 */class BankCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($bank) {
            $data = [
                'id' => $bank->getKey() ?? null,
                'country_id' => $bank->country_id ?? null,
                'country' => $bank->country->name ?? null,
                'beneficiary_type_id' => $bank->beneficiary_type_id ?? null,
                'beneficiary_type' => $bank->beneficiary_type->name ?? null,
                'name' => $bank->name ?? null,
                'category' => $bank->category ?? null,
                'transaction_type' => $bank->transaction_type ?? null,
                'currency' => $bank->currency ?? null,
                'bank_data' => $bank->bank_data ?? null,
                'logo_png' => $bank->getFirstMediaUrl('logo_svg') ?? null,
                'logo_svg' => $bank->getFirstMediaUrl('logo_svg') ?? null,
                'enabled' => $bank->enabled ?? null,
                'links' => $bank->links,
                'created_at' => $bank->created_at,
                'updated_at' => $bank->updated_at,
            ];

            return $data;
        })->toArray();
    }

    /**
     * Get additional data that should be returned with the resource array.
     *
     * @return array<string, mixed>
     */
    public function with(Request $request): array
    {
        return [
            'options' => [
                'dir' => Constant::SORT_DIRECTIONS,
                'per_page' => Constant::PAGINATE_LENGTHS,
                'sort' => ['id', 'name', 'created_at', 'updated_at'],
            ],
            'query' => $request->all(),
        ];
    }
}
