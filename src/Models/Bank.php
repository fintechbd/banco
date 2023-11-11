<?php

namespace Fintech\Banco\Models;

use Fintech\Core\Traits\AuditableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Bank extends Model implements HasMedia
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

    protected $casts = ['bank_data' => 'array', 'restored_at' => 'datetime', 'enabled' => 'bool'];

    protected $hidden = ['creator_id', 'editor_id', 'destroyer_id', 'restorer_id'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo_png')
            ->acceptsMimeTypes(['image/png'])
            ->singleFile()
            ->useDisk(config('filesystems.default', 'public'));

        $this->addMediaCollection('logo_svg')
            ->acceptsMimeTypes(['image/svg+xml'])
            ->singleFile()
            ->useDisk(config('filesystems.default', 'public'));
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    /**
     * @return HasMany
     */
    public function branches(): HasMany
    {
        return $this->hasMany(config('fintech.banco.bank_branch_model', \Fintech\Banco\Models\BankBranch::class));
    }

    /**
     * @return HasMany
     */
    public function country(): HasMany
    {
        return $this->hasMany(config('fintech.metadata.country_model', \Fintech\MetaData\Models\Country::class));
    }

    /**
     * @return BelongsTo
     */
    public function beneficiaryType(): BelongsTo
    {
        return $this->belongsTo(config('fintech.banco.beneficiary_type_model', BeneficiaryType::class));
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
            'show' => action_link(route('banco.banks.show', $primaryKey), __('core::messages.action.show'), 'get'),
            'update' => action_link(route('banco.banks.update', $primaryKey), __('core::messages.action.update'), 'put'),
            'destroy' => action_link(route('banco.banks.destroy', $primaryKey), __('core::messages.action.destroy'), 'delete'),
            'restore' => action_link(route('banco.banks.restore', $primaryKey), __('core::messages.action.restore'), 'post'),
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
