<?php

namespace Sander\Module\Service;

class ProductPrice
{
    /**
     * @param float $retailPrice
     * @param string $country
     * @return float
     */
    public function retailPrice(float $retailPrice, string $country): float
    {
        $retailPrice = $this->priceIncludingFee($retailPrice);

        $retailPrice = $this->priceIncludingTax($retailPrice, $country);

        return $retailPrice;
    }

    /**
     * @param float $price
     * @return float
     */
    public function priceIncludingFee(float $price): float
    {
        $fee = new Fee();

        return $price + $fee->calculatedAmount($price);
    }

    /**
     * @param float $price
     * @param string $country
     * @return float
     */
    public function priceIncludingTax(float $price, string $country): float
    {
        $tax = new Tax();

        return $price + $tax->taxAmount($price, $country);
    }
}