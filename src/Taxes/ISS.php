<?php


namespace Learning\DesignPattern\Taxes;


use Learning\DesignPattern\Models\Inquiry;

class ISS implements Tax
{
    public function calcTax(Inquiry $inquiry): float
    {
        return $inquiry->value * 0.06;
    }
}