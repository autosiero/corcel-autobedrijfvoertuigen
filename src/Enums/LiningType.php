<?php

declare(strict_types=1);

namespace Siero\Corcel\Enums;

/**
 * The interior lining used
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class LiningType extends Enum
{
    public const ALCANTARA = "Alcantara";
    public const LEATHER_ALCANTARA_MIX = "Half leder / alcantara";
    public const LEATHER_FABRIC_MIX = "Half leder / stof";
    public const LEATHER = "Leder";
    public const SKAI = "Skai";
    public const FABRIC = "Stof";
    public const VELOR = "Velours";
}
