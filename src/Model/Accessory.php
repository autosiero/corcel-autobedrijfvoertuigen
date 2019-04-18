<?php

declare(strict_types=1);

namespace Siero\Corcel\Model;

use Corcel\Model;
use Corcel\Concerns\Aliases;
use Illuminate\Database\Eloquent\Relations\Relation;
use Siero\Corcel\Model\Traits\HasParentVehicle;

/**
 * A vehicle accessory, not bound to an accessory group
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class Accessory extends Model
{
    use Aliases;
    use HasParentVehicle;

    /**
     * @var array
     */
    protected static $aliases = [
        'id'       => 'id',
        'name'     => 'accessoire',
        'priority' => 'prioriteit',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'prioriteit' => 'int',
    ];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    protected $table = 'autobedrijf_voertuig_accessoires';
}
