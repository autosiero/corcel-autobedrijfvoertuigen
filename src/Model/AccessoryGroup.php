<?php

declare(strict_types=1);

namespace Siero\Corcel\Model;

use Corcel\Model;
use Corcel\Concerns\Aliases;
use Illuminate\Database\Eloquent\Relations\Relation;
use Siero\Corcel\Model\Traits\HasParentVehicle;

/**
 * A vehicle accessory group, has child nodes
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class AccessoryGroup extends Model
{
    use Aliases;
    use HasParentVehicle;

    /**
     * @var array
     */
    protected static $aliases = [
        'id'       => 'id',
        'name'     => 'naam',
    ];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    protected $table = 'autobedrijf_voertuig_accessoiregroepen';

    /**
     * Returns the Vehicle this object belongs to
     *
     * @return Relation
     */
    public function accessories() : Relation
    {
        return $this->belongsTo(AccessoryGroupItem::class, 'id', 'parent_id');
    }
}
