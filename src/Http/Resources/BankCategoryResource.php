<?php

namespace Fintech\Banco\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BankCategoryResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
