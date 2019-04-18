<?php

declare(strict_types=1);

namespace Siero\Corcel\Enums;

/**
 * Does the price include this kind of tax (used on bpm and btw)
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class PriceTax extends Enum
{
    public const INCLUSIVE = 'in';
    public const EXCLUSIVE = 'ex';
}
