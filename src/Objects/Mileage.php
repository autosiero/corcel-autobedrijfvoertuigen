<?php

declare(strict_types=1);

namespace Siero\Corcel\Objects;

use Siero\Corcel\Enums\MileageUnit;
use Siero\Corcel\Traits\Objects\HasImmutableProperties;

/**
 * A mileage indictation object, immutable.
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
final class Mileage implements \JsonSerializable
{
    use HasImmutableProperties;

    /**
     * @var int
     */
    protected $mileage;

    /**
     * @var MileageUnit|null
     */
    protected $unit;

    public function __construct(int $mileage, MileageUnit $unit = null)
    {
        $this->mileage = $mileage;
        $this->unit = $unit;
    }

    /**
     * Returns the price as a string
     *
     * @return string
     */
    public function __toString()
    {
        if ($this->mileage === 0) {
            return 'n/a';
        }

        $value = number_format($this->mileage, 0, ',', '.');
        if (MileageUnit::MILES()->equals($this->unit)) {
            return "{$value} mi";
        }

        return "{$value} km";
    }

    /**
     * Returns the data of this price, as array
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'value' => $this->mileage,
            'unit' => MileageUnit::MILES()->equals($this->unit) ? 'mi' : 'km',
            'formatted' => (string) $this,
        ];
    }
}
