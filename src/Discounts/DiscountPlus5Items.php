<?php

namespace Learning\DesignPattern\Discounts;

use Learning\DesignPattern\Models\Inquiry;

class DiscountPlus5Items extends Discount
{
    public function calcDiscount(Inquiry $inquiry): float
    {
        {
            if ($inquiry->quantityItems > 5) {
                return $inquiry->value * 0.1;
            }

            return $this->nextDiscount->calcDiscount($inquiry);
        }
    }
}