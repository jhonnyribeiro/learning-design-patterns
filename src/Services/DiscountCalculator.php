<?php


namespace Learning\DesignPattern\Services;


use Learning\DesignPattern\Discounts\DiscountPlus500Moneys;
use Learning\DesignPattern\Discounts\DiscountPlus5Items;
use Learning\DesignPattern\Discounts\NoDiscount;
use Learning\DesignPattern\Models\Inquiry;

class DiscountCalculator
{
    public function calcDiscount(Inquiry $inquiry): float
    {
        $discountsChain = new DiscountPlus5Items(
            new DiscountPlus500Moneys(
                new NoDiscount()
            )
        );

        return $discountsChain->calcDiscount($inquiry);
    }
}