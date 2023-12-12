<?php

namespace Fintech\Banco\Traits;

use Fintech\Core\Facades\Core;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

if (Core::packageExists('MetaData')) {
    trait MetaDataRelations
    {
        public function country(): BelongsTo
        {
            return $this->belongsTo(
                config('fintech.metadata.country_model', \Fintech\MetaData\Models\Country::class),
                'country_id');
        }

        public function city(): BelongsTo
        {
            return $this->belongsTo(
                config('fintech.metadata.city_model', \Fintech\MetaData\Models\City::class),
                'city_id');
        }
        public function state(): BelongsTo
        {
            return $this->belongsTo(
                config('fintech.metadata.state_model', \Fintech\MetaData\Models\State::class),
                'state_id');
        }
        public function relation(): BelongsTo
        {
            return $this->belongsTo(
                config('fintech.metadata.relation_model', \Fintech\MetaData\Models\Relation::class),
                'relation_id');
        }
    }
} else {
    trait MetaDataRelations
    {
    }
}
