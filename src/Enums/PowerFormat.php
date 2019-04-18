<?php

declare(strict_types=1);

namespace Siero\Corcel\Enums;

/**
 * The kind of power format, used to indicate how much power the car has.
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class PowerFormat extends Enum
{
    public const KW = 'kW';
    public const PK = 'PK';
}
