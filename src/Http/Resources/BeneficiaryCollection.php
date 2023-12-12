<?php

namespace Fintech\Banco\Http\Resources;

use Fintech\Core\Supports\Constant;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @property int $user_id
 * @property int $city_id
 * @property string $city
 * @property int $state_id
 * @property string $state
 * @property int $country_id
 * @property string $country
 * @property int $beneficiary_type_id
 * @property string $beneficiary_type
 * @property int $relation_id
 * @property string $relation
 * @property string $beneficiary_name
 * @property string $beneficiary_mobile
 * @property string $beneficiary_address
 * @property string $beneficiary_data
 * @property bool $enabled
 * @property mixed $links
 * @property mixed $created_at
 * @property mixed $updated_at
 *
 * @method getKey()
 * @method getFirstMediaUrl(string $string)
 */
class BeneficiaryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($beneficiary) {
            $data = [
                'id' => $beneficiary->getKey() ?? null,
                'user_id' => $beneficiary->user_id ?? null,
                'name' => $beneficiary->user->name ?? null,
                'city_id' => $beneficiary->city_id ?? null,
                'city' => $beneficiary->city->name ?? null,
                'state_id' => $beneficiary->state_id ?? null,
                'state' => $beneficiary->state->name ?? null,
                'country_id' => $beneficiary->country_id ?? null,
                'country' => $beneficiary->country->name ?? null,
                'beneficiary_type_id' => $beneficiary->beneficiary_type_id ?? null,
                'beneficiary_type' => $beneficiary->beneficiary_type->name ?? null,
                'relation_id' => $beneficiary->relation_id ?? null,
                'relation' => $beneficiary->relation->name ?? null,
                'beneficiary_name' => $beneficiary->beneficiary_name ?? null,
                'beneficiary_photo' => $beneficiary->getFirstMediaUrl('photo') ?? null,
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
