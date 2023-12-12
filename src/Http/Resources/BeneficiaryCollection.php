<?php

namespace Fintech\Banco\Http\Resources;

use Fintech\Core\Supports\Constant;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BeneficiaryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($beneficiary) {
            $data = [
                'id' => $beneficiary->getKey() ?? null,
                'user_id' => $beneficiary->user_id ?? null,
                'city_id' => $beneficiary->city_id ?? null,
                'city_name' => $beneficiary->city_name ?? null,
                'state_id' => $beneficiary->state_id ?? null,
                'state_name' => $beneficiary->state_name ?? null,
                'country_id' => $beneficiary->country_id ?? null,
                'country_name' => $beneficiary->country_name ?? null,
                'beneficiary_type_id' => $beneficiary->beneficiary_type_id ?? null,
                'beneficiary_type_name' => $beneficiary->beneficiary_type_name ?? null,
                'relation_id' => $beneficiary->relation_id ?? null,
                'relation_name' => $beneficiary->relation_name ?? null,
                'beneficiary_name' => $beneficiary->beneficiary_name ?? null,
                'beneficiary_mobile' => $beneficiary->beneficiary_mobile ?? null,
                'beneficiary_address' => $beneficiary->beneficiary_address ?? null,
                'beneficiary_data' => $beneficiary->beneficiary_data ?? null,
                'enabled' => $beneficiary->enabled ?? null,
                'links' => $beneficiary->links,
                'created_at' => $beneficiary->created_at,
                'updated_at' => $beneficiary->updated_at,
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
