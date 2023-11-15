<?php

namespace Fintech\Banco\Http\Resources;

use Fintech\Banco\Models\BeneficiaryType;
use Fintech\Core\Facades\Core;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @method getKey()
 * @method getFirstMediaUrl(string $string)
 *
 * @property int $country_id
 * @property \Fintech\MetaData\Models\Country $country
 * @property int $beneficiary_type_id
 * @property BeneficiaryType $beneficiaryType
 * @property string $name
 * @property string $category
 * @property string $transaction_type
 * @property string $currency
 * @property array $bank_data
 * @property bool $enabled
 * @property mixed $links
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class BankResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        $data = [
            'id' => $this->getKey() ?? null,
            'country_id' => $this->country_id ?? null,
            'country_name' => null,
            'beneficiary_type_id' => $this->beneficiary_type_id ?? null,
            'beneficiary_type_name' => $this->beneficiaryType->beneficiary_type_name ?? null,
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

        if (Core::packageExists('MetaData')) {
            $data['country_name'] = ($this->country) ? $this->country->name : null;
        }

        return $data;
    }
}
