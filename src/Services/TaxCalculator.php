<?php

namespace Learning\DesignPattern\Services;

use Learning\DesignPattern\Models\Inquiry;
use Learning\DesignPattern\Taxes\Tax;

class TaxCalculator
{
    public function calc(Inquiry $inquiry, Tax $tax)
    {
        return $tax->calcTax($inquiry);
    }
}