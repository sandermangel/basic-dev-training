<?php

namespace Sander\Module\Service;

class Fee
{
    /**
     * @param float $price
     * @return float
     */
    public function calculatedAmount(float $price): float
    {
        return 1.50 + ($price * 0.05);
    }
}