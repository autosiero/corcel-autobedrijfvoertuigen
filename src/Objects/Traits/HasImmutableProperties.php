<?php

declare(strict_types=1);

namespace Siero\Corcel\Objects\Traits;

/**
 * Allows read-only access to the properties on this object.
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
trait HasImmutableProperties
{
    public function __get(string $key)
    {
        // Return key
        if (property_exists($this, $key)) {
            return $this->{$key};
        }

        // Or error
        throw new \InvalidArgumentException(sprintf(
            "Cannot find a key named [%s] on [%s]",
            $key,
            get_class($this)
        ));
    }
}
