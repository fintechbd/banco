<?php

namespace Fintech\Banco\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
 */
class BankResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        $data = [
            'id' => $this->getKey() ?? null,
            'country_id' => $this->country_id ?? null,
            'country' => $this->country->name ?? null,
            'beneficiary_type_id' => $this->beneficiary_type_id ?? null,
            'beneficiary_type' => $this->beneficiary_type->name ?? null,
            'name' => $this->name ?? null,
            'category' => $this->category ?? null,
            'transaction_type' => $this->transaction_type ?? null,
            'currency' => $this->currency ?? null,
            'bank_data' => $this->bank_data ?? null,
            'logo_png' => $this->getFirstMediaUrl('logo_svg') ?? null,
            'logo_svg' => $this->getFirstMediaUrl('logo_svg') ?? null,
            'enabled' => $this->enabled ?? null,
            'links' => $this->links,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];

        return $data;
    }
}
