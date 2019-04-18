<?php

declare(strict_types=1);

namespace Siero\Corcel\Model;

use Corcel\Concerns\Aliases;
use Corcel\Model;
use Corcel\Model\Attachment;
use Corcel\Model\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Siero\Corcel\Model\Builder\VehicleBuilder;
use Siero\Corcel\Price;
use Siero\Corcel\Enums\PriceTax;
use Siero\Corcel\Model\Traits\VehicleAliases;
use Siero\Corcel\Enums\MileageUnit;
use Siero\Corcel\Model\Traits\HasPrices;

/**
 * The main vehicle class.
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class Vehicle extends Model
{
    use VehicleAliases,
        HasPrices;

    /**
     * @var string
     */
    protected $table = 'autobedrijf_voertuig';

    /**
     * @var array
     */
    protected $with = [
        'meta',
        'thumbnail',
        'product_type',
    ];

    /**
     * Returns the accessories of this vehicle
     */
    public function accessories() : Relation
    {
        return $this->hasMany(Accessory::class, 'parent_id', 'id')
            ->orderBy('prioriteit ASC');
    }

    /**
     * Returns the accessory groups of this vehicle
     */
    public function accessoryGroups() : Relation
    {
        return $this->hasMany(AccessoryGroup::class, 'parent_id', 'id')
            ->with('accessories');
    }

    /**
     * Returns the images of the vehicle
     */
    public function images() : Relation
    {
        return $this->hasMany(Images::class, 'parent_id', 'id')
            ->orderBy('prioriteit ASC');
    }

    /**
     * Register our own query builder extension, since we're adding a lot of
     * filters.
     *
     * @param mixed $query
     * @return Builder
     */
    public function newEloquentBuilder($query) : Builder
    {
        return new VehicleBuilder($query);
    }

    /**
     * Returns mileage
     *
     * @return Mileage
     */
    public function getMileageAttribute() : Mileage
    {
        // Return empty mileage if none was found
        if (empty($this->attributes['tellerstand'])) {
            return new Mileage(0, null);
        }

        // Return mileage
        return new Mileage(
            $this->attributes['tellerstand'],
            MileageUnit::buildFromFeed($this->attributes['tellerstand_eenheid'])
        );
    }
}
