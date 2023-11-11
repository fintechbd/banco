<?php

namespace Fintech\Banco\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property integer $user_id
 * @property integer $city_id
 * @property string $city
 * @property integer $state_id
 * @property string $state
 * @property integer $country_id
 * @property string $country
 * @property integer $beneficiary_type_id
 * @property string $beneficiary_type
 * @property integer $relation_id
 * @property string $relation
 * @property string $beneficiary_name
 * @property string $beneficiary_mobile
 * @property string $beneficiary_address
 * @property string $beneficiary_data
 * @property boolean $enabled
 * @property mixed $links
 * @property mixed $created_at
 * @property mixed $updated_at
 * @method getKey()
 * @method getFirstMediaUrl(string $string)
 */
class BeneficiaryResource extends JsonResource
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
            'user_id' => $this->user_id ?? null,
            'name' => $this->user->name ?? null,
            'city_id' => $this->city_id ?? null,
            'city' => $this->city->name ?? null,
            'state_id' => $this->state_id ?? null,
            'state' => $this->state->name ?? null,
            'country_id' => $this->country_id ?? null,
            'country' => $this->country->name ?? null,
            'beneficiary_type_id' => $this->beneficiary_type_id ?? null,
            'beneficiary_type' => $this->beneficiary_type->name ?? null,
            'relation_id' => $this->relation_id ?? null,
            'relation' => $this->relation->name ?? null,
            'beneficiary_name' => $this->beneficiary_name ?? null,
            'beneficiary_photo' => $this->getFirstMediaUrl('photo') ?? null,
            'beneficiary_mobile' => $this->beneficiary_mobile ?? null,
            'beneficiary_address' => $this->beneficiary_address ?? null,
            'beneficiary_data' => $this->beneficiary_data ?? null,
            'enabled' => $this->enabled ?? null,
            'links' => $this->links,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];

        return $data;

    }
}
