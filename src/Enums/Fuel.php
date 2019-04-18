<?php

declare(strict_types=1);

namespace Siero\Corcel\Enums;

/**
 * The kind of fuel this vehicle is using.
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class Fuel extends Enum
{
    public const GASOLINE = "B";
    public const DIESEL = "D";
    public const LPG_GAS = "L";
    public const LPG_G3 = "3";
    public const ELECTRIC = "E";
    public const ELECTRIC_GASOLINE = "B,E";
    public const ELECTRIC_DIESEL = "D,E";
    public const HYBRID = "H";
    public const CRYOGENIC = "C";
    public const OTHER = "O";
}
