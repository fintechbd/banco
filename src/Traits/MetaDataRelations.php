<?php

namespace Fintech\Banco\Traits;

use Fintech\Core\Facades\Core;
use Fintech\MetaData\Models\City;
use Fintech\MetaData\Models\Country;
use Fintech\MetaData\Models\Relation;
use Fintech\MetaData\Models\State;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

if (Core::packageExists('MetaData')) {
    trait MetaDataRelations
    {
        public function country(): BelongsTo
        {
            return $this->belongsTo(
                config('fintech.metadata.country_model', Country::class),
                'country_id');
        }

        public function city(): BelongsTo
        {
            return $this->belongsTo(
                config('fintech.metadata.city_model', City::class),
                'city_id');
        }

        public function state(): BelongsTo
        {
            return $this->belongsTo(
                config('fintech.metadata.state_model', State::class),
                'state_id');
        }

        public function relation(): BelongsTo
        {
            return $this->belongsTo(
                config('fintech.metadata.relation_model', Relation::class),
                'relation_id');
        }
    }
} else {
    trait MetaDataRelations
    {
    }
}
