<?php

declare(strict_types=1);

namespace Siero\Corcel\Enums;

/**
 * The tax form of this vehicle.
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class TaxType extends Enum
{
    public const BTW = 'B';
    public const MARGE = 'M';
}
