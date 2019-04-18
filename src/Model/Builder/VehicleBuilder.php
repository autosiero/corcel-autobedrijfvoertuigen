<?php

declare(strict_types=1);

namespace Siero\Corcel\Model\Builder;

use Corcel\Model\Builder\PostBuilder;

/**
 * Searches vehicles
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
class VehicleBuilder extends PostBuilder
{
    /**
     * Finds vehicles within a mileage
     *
     * @param int|null $min
     * @param int|null $max
     * @return self
     */
    public function mileage(int $min = null, int $max = null) : self
    {
        return $this->rangeKey('tellerstand', $min, $max);
    }

    /**
     * Finds vehicles within a price range
     *
     * @param int|null $min
     * @param int|null $max
     * @return self
     */
    public function price(int $min = null, int $max = null) : self
    {
        return $this->rangeKey('price', $min, $max);
    }

    /**
     * Finds vehicles within a production year
     *
     * @param int|null $min
     * @param int|null $max
     * @return self
     */
    public function year(int $min = null, int $max = null) : self
    {
        return $this->rangeKey('bouwjaar', $min, $max);
    }

    /**
     * Range by the given key
     *
     * @param string $key
     * @param int|null $min
     * @param int|null $max
     * @return self
     * @throws InvalidArgumentException If the upper bound and lower bound aren't present
     * @throws RangeException if the $min is larger than the $max
     */
    private function rangeKey(string $key, int $min = null, int $max = null) : self
    {
        // Require a bound
        if ($min === null && $max === null) {
            throw new \InvalidArgumentException('Need at least a lower or upper bound. Received neither.');
        }

        // Only upper bound
        if ($min === null) {
            return $this->where($key, '<=', $max);
        }

        // Only lower bound
        if ($max === null) {
            return $this->where($key, '>=', $min);
        }

        // Upper bound should be an upper bound
        if ($min > $max) {
            throw new \RangeException("Lower bound [$min] is larger than upper bound [$max]");
        }

        return $this->whereBetween($key, [$min, $max]);
    }

    /**
     * Returns vehicles that are still available
     *
     * @return self
     */
    public function available()
    {
        return $this->where([
            'verkocht' => '0',
            'verwacht' => '0',
            'geserveerd' => '0',
        ]);
    }

    /**
     * Finds vehicles that are sold
     *
     * @return self
     */
    public function expected() : self
    {
        return $this->where('verwacht', '1');
    }

    /**
     * Finds vehicles that are sold
     *
     * @return self
     */
    public function sold() : self
    {
        return $this->where('verkocht', '1');
    }

    /**
     * Finds vehicles that are sold
     *
     * @return self
     */
    public function reserved() : self
    {
        return $this->where('geserveerd', '1');
    }

    /**
     * Filters by license plate, auto formats license plate
     *
     * @param string $license
     * @return self
     * @throws InvalidArgumentException License plate isn't a total of 6 characters, not counting dashes.
     */
    public function licensePlate(string $license) : self
    {
        $plate = preg_replace('/[^A-Z0-9]+/', '', mb_strtoupper($license));
        if (strlen($plate) != 6) {
            throw new \InvalidArgumentException("Invalid license plate [{$license}].");
        }

        return $this->where('kenteken', $license);
    }

    /**
     * Filter by VIN, auto-formats the VIN number
     *
     * @param string $vin
     * @return self
     */
    public function vin(string $vin) : self
    {
        $vin = preg_replace('/[^A-Z0-9]+/', '', mb_strtoupper($vin));
        return $this->where('vin', $vin);
    }
}
