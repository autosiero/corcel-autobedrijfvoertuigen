<?php

declare(strict_types=1);

namespace Siero\Corcel\Model\Traits;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Builder;

/**
 * Adds a parent to the given vehicle
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
trait HasParentVehicle
{
    /**
     * Returns the Vehicle this object belongs to
     *
     * @return Relation
     */
    public function parent() : Relation
    {
        return $this->belongsTo(Vehicle::class, 'id', 'parent_id');
    }

    /**
     * Scope by vehicle
     *
     * @param Builder $query
     * @param Vehicle $vehicle
     * @return Builder
     */
    public function scopeParent(Builder $query, Vehicle $vehicle) : Builder
    {
        return $query->where('parent_id', $vehicle->id);
    }
}
