<?php

namespace Fintech\Banco\Models;

use Fintech\Auth\Models\User;
use Fintech\Core\Abstracts\BaseModel;
use Fintech\Core\Traits\AuditableTrait;
use Fintech\MetaData\Models\City;
use Fintech\MetaData\Models\Country;
use Fintech\MetaData\Models\Relation;
use Fintech\MetaData\Models\State;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Beneficiary extends BaseModel implements HasMedia
{
    use AuditableTrait;
    use InteractsWithMedia;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    protected $appends = ['links'];

    protected $casts = ['beneficiary_data' => 'array', 'restored_at' => 'datetime', 'enabled' => 'bool'];

    protected $hidden = ['creator_id', 'editor_id', 'destroyer_id', 'restorer_id'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('photo')
            ->acceptsMimeTypes(['image/png', 'image/jpg', 'image/jpeg', 'image/bmp', 'image/svg+xml'])
            ->singleFile()
            ->useDisk(config('filesystems.default', 'public'));
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function beneficiaryType(): BelongsTo
    {
        return $this->belongsTo(config('fintech.banco.beneficiary_type_model', BeneficiaryType::class));
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(config('fintech.auth.user_model', User::class));
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(config('fintech.metadata.country_model', Country::class));
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(config('fintech.metadata.state_model', State::class));
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(config('fintech.metadata.city_model', City::class));
    }

    public function relation(): BelongsTo
    {
        return $this->belongsTo(config('fintech.metadata.relation_model', Relation::class));
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /**
     * @return array
     */
    public function getLinksAttribute()
    {
        $primaryKey = $this->getKey();

        $links = [
            'show' => action_link(route('banco.beneficiaries.show', $primaryKey), __('core::messages.action.show'), 'get'),
            'update' => action_link(route('banco.beneficiaries.update', $primaryKey), __('core::messages.action.update'), 'put'),
            'destroy' => action_link(route('banco.beneficiaries.destroy', $primaryKey), __('core::messages.action.destroy'), 'delete'),
            'restore' => action_link(route('banco.beneficiaries.restore', $primaryKey), __('core::messages.action.restore'), 'post'),
        ];

        if ($this->getAttribute('deleted_at') == null) {
            unset($links['restore']);
        } else {
            unset($links['destroy']);
        }

        return $links;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
