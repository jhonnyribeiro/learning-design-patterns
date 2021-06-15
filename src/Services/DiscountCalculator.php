<?php


namespace Learning\DesignPattern\Services;


use Learning\DesignPattern\Models\Inquiry;

class DiscountCalculator
{
    public function calcDiscount(Inquiry $inquiry): float
    {
        if ($inquiry->quantityItems > 5) {
            return $inquiry->value * 0.1;
        }

        return 0;
    }
}