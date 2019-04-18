<?php

declare(strict_types=1);

namespace Siero\Corcel\Model\Traits;

use Siero\Corcel\Enums\Enum;
use Illuminate\Support\Carbon;

/**
 * Adds extra methods to handle contents, such as conversion to Enums
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
trait CastsEnums
{
    /**
     * Casts enums, or forwards it to Laravel
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    protected function castAttribute($key, $value)
    {
        // A hexon date
        if ($key === 'hexon-date') {
            $dateLength = strlen($value ?? '');
            if ($dateLength > 7) {
                return Carbon::createFromFormat('%Y-%m-%d', $value);
            } elseif ($dateLength > 4) {
                return Carbon::createFromFormat('%Y-%m', $value);
            } elseif ($dateLength === 4) {
                return Carbon::createFromFormat('%Y', $value);
            }
            return null;
        }

        // Cast to enum if it's one
        if (is_a($key, Enum::class, true)) {
            return $key::buildFromFeed($value);
        }

        // Pass to Laravel
        return parent::castAttribute($key, $value);
    }
}
