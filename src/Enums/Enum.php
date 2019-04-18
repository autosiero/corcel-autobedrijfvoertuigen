<?php

declare(strict_types=1);

namespace Siero\Corcel\Enums;

use MyCLabs\Enum\Enum as BaseEnum;

/**
 * The kind of vehicle this is, usually it's AUTO or BEDRIJF.
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class Enum extends BaseEnum
{
    /**
     * Builds an enum from the feed value, returning null if the value is empty or
     * if the value isn't a valid enum.
     *
     * @param mixed $value
     * @return self|null
     */
    public static function buildFromFeed($value) : ?self
    {
        // Empty ⇒ null
        if (empty($value)) {
            return null;
        }

        try {
            // Non-empty, so return value if it exists.
            return new self($value);
        } catch (\UnexpectedValueException $e) {
            // Return null if not available
            return null;
        }
    }
}
