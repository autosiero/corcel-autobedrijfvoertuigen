<?php

declare(strict_types=1);

namespace Siero\Corcel\Enums;

/**
 * The transmission type.
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class Transmission extends Enum
{
    public const MANUAL = "H";
    public const AUTOMATIC = "A";
    public const SEMI_AUTOMATIC = "S";
    public const CVT = "C";
}
