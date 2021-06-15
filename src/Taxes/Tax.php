<?php


namespace Learning\DesignPattern\Taxes;


use Learning\DesignPattern\Models\Inquiry;

interface Tax
{
    public function calcTax(Inquiry $inquiry): float;
}