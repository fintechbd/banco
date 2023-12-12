<?php

namespace Fintech\Banco\Models;

use Fintech\Banco\Traits\MetaDataRelations;
use Fintech\Core\Traits\AuditableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Beneficiary extends Model implements HasMedia
{
    use AuditableTrait;
    use InteractsWithMedia;
    use SoftDeletes;
    use MetaDataRelations;

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
    /**
     * @return BelongsTo
     */
    public function beneficiaryType(): BelongsTo
    {
        return $this->belongsTo(config('fintech.banco.beneficiary_type_model', \Fintech\Banco\Models\BeneficiaryType::class));
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
