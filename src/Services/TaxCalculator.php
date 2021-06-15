<?php

namespace Learning\DesignPattern\Services;

use Learning\DesignPattern\Models\Inquiry;

class TaxCalculator
{
    public function calc(Inquiry $inquiry, string $taxName)
    {
        switch ($taxName) {
            case "ICMS":
                return $inquiry->value * 0.1;
            case "ISS":
                return $inquiry->value * 0.06;
        }
    }
}