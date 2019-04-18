<?php

declare(strict_types=1);

namespace Siero\Corcel\Enums;

/**
 * The European emission rate of the vehicle (EURO-X)
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class EmissionRating extends Enum
{
    public const EURO_1 = 1;
    public const EURO_2 = 2;
    public const EURO_3 = 3;
    public const EURO_4 = 4;
    public const EURO_5 = 5;
    public const EURO_6 = 6;

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        static $ratings;

        if (!$ratings) {
            $ratings = array_map(function ($value) {
                return "Euro {$value}";
            }, ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII']);
        }

        return $ratings[$this->getValue()];
    }
}
