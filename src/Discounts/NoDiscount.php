<?php


namespace Learning\DesignPattern\Discounts;


use Learning\DesignPattern\Models\Inquiry;

class NoDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calcDiscount(Inquiry $inquiry): float
    {
        return 0;
    }
}