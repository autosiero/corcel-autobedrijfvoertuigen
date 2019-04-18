<?php

declare(strict_types=1);

namespace Siero\Corcel\Model;

use Corcel\Model;
use Corcel\Concerns\Aliases;
use Illuminate\Database\Eloquent\Relations\Relation;
use Siero\Corcel\Model\Traits\HasParentVehicle;

/**
 * A vehicle accessory, as part of an accessory group
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class AccessoryGroupItem extends Model
{
    use Aliases;
    use HasParentVehicle;

    /**
     * @var array
     */
    protected static $aliases = [
        'id'       => 'id',
        'name'     => 'value'
    ];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    protected $table = 'autobedrijf_voertuig_accessoiregroepen_accessoires';
}
