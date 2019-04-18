<?php

declare(strict_types=1);

namespace Siero\Corcel\Model\Traits;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Builder;

/**
 * Adds price fields to the object
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
trait HasPrices
{
    /**
     * Constructs prices
     *
     * @param string $key
     * @return Price|null
     */
    private function buildPrice(string $key) : ?Price
    {
        if (empty($this->attributes[$key])  && $this->attributes[$key] !== 0) {
            return null;
        }

        // Build a price, with tax data
        return new Price(
            $this->attributes[$key],
            PriceTax::buildFromFeed($this->attributes["{$key}_bpm"] ?? null),
            PriceTax::buildFromFeed($this->attributes["{$key}_btw"] ?? null)
        );
    }

    /**
     * Returns the price of the vehicle for consumers
     *
     * @return Price|null
     */
    public function getConsumerPriceAttribute() : ?Price
    {
        return $this->buildPrice('verkoopprijs_particulier');
    }

    /**
     * Returns the price of the vehicle for consumers
     *
     * @return Price|null
     */
    public function getBusinessPriceAttribute() : ?Price
    {
        return $this->buildPrice('verkoopprijs_handel');
    }

    /**
     * Returns the price of the vehicle for consumers
     *
     * @return Price|null
     */
    public function getTakeoutPriceAttribute() : ?Price
    {
        return $this->buildPrice('actieprijs');
    }

    /**
     * Returns the price of the vehicle for consumers
     *
     * @return Price|null
     */
    public function getDiscountPriceAttribute() : ?Price
    {
        return $this->buildPrice('actieprijs');
    }

    /**
     * Returns the actual price of the vehicle.
     *
     * @return Price|null
     */
    public function getPriceAttribute() : ?Price
    {
        return $this->consumer_price ?? $this->business_price ?? $this->takout_price ?? null;
    }
}
