<?php

declare(strict_types=1);

namespace Siero\Corcel\Objects;

use Siero\Corcel\Enums\PriceTax;
use Siero\Corcel\Traits\Objects\HasImmutableProperties;

/**
 * A price object, immutable.
 *
 * @author Roelof Roos <github@roelof.io>
 * @author Auto Siero (https://autosiero.dev/)
 * @license MIT
 */
final class Price implements \JsonSerializable
{
    use HasImmutableProperties;

    /**
     * @var int
     */
    protected $price;

    /**
     * @var bool|null
     */
    protected $btw;
    /**
     * @var bool|null
     */
    protected $bpm;

    public function __construct(int $price, PriceTax $btw = null, PriceTax $bpm = null)
    {
        $this->price = $price;
        $this->btw = $btw;
        $this->bpm = $bpm;
    }

    /**
     * Returns the price as a string
     *
     * @return string
     */
    public function __toString()
    {
        if ($this->price === 0) {
            return '€ -';
        }

        return sprintf('€ %s', number_format($this->price, 0, ',', '.'));
    }

    /**
     * Returns the data of this price, as array
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'value' => $this->price,
            'currency' => 'EUR',
            'formatted' => (string) $this,
            'includes-btw' => $this->btw === null ? null : PriceTax::INCLUSIVE()->equals($this->btw),
            'includes-bpm' => $this->bpm === null ? null : PriceTax::INCLUSIVE()->equals($this->bpm),
        ];
    }
}
