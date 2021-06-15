<?php

namespace Learning\DesignPattern\Discounts;

use Learning\DesignPattern\Models\Inquiry;

class DiscountPlus500Moneys extends Discount
{
    public function calcDiscount(Inquiry $inquiry): float
    {
        {
            if ($inquiry->value > 500) {
                return $inquiry->value * 0.05;
            }

            return 0;
        }
    }
}