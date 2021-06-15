<?php


namespace Learning\DesignPattern\Discounts;


use Learning\DesignPattern\Models\Inquiry;

abstract class Discount
{
    protected ?Discount $nextDiscount;

    public function __construct(?Discount $nextDiscount)
    {
        $this->nextDiscount = $nextDiscount;
    }

    abstract public function calcDiscount(Inquiry $inquiry): float;
}