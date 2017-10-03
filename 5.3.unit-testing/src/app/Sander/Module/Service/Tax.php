<?php

namespace Sander\Module\Service;

class Tax
{
    protected $taxRates = [
        'nl' => 21,
        'de' => 19,
        'be' => 23
    ];

    /**
     * @param string $country
     * @return float
     */
    public function rateByCountry(string $country): float
    {
        return $this->taxRates[$country] ?? 0 ;
    }

    /**
     * @param float $price
     * @param string $country
     * @return float
     */
    public function taxAmount(float $price, string $country): float
    {
        return $price * ($this->rateByCountry($country) / 100);
    }
}