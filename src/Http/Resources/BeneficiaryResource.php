<?php

namespace Fintech\Banco\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BeneficiaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $data = [
            'id' => $this->getKey() ?? null,
            'user_id' => $this->user_id ?? null,
            'city_id' => $this->city_id ?? null,
            //'city_name' => $this->city_name ?? null,
            'state_id' => $this->state_id ?? null,
            //'state_name' => $this->state_name ?? null,
            'country_id' => $this->country_id ?? null,
            //'country_name' => $this->country_name ?? null,
            'beneficiary_type_id' => $this->beneficiary_type_id ?? null,
            //'beneficiary_type_name' => $this->beneficiaryType->?beneficiary_type_name ?? null,
            'relation_id' => $this->relation_id ?? null,
            //'relation_name' => $this->relation_name ?? null,
            'beneficiary_name' => $this->beneficiary_name ?? null,
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
