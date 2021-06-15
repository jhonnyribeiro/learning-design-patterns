<?php

use Learning\DesignPattern\Models\Inquiry;
use Learning\DesignPattern\Services\DiscountCalculator;
use Learning\DesignPattern\Services\TaxCalculator;
use Learning\DesignPattern\Taxes\ICMS;
use Learning\DesignPattern\Taxes\ISS;

require 'vendor/autoload.php';

$calculator = new TaxCalculator();

$inquiry = new Inquiry();
$inquiry->value = 600;

echo "Valor Orçamento: ".$inquiry->value.PHP_EOL;
echo "Valor ICMS: ".$calculator->calc($inquiry, new ICMS()).PHP_EOL;
echo "Valor ISS: ".$calculator->calc($inquiry, new ISS()).PHP_EOL;

$inquiry->quantityItems = 7;

$discountCalculator = new DiscountCalculator();


echo "Valor Desconto: ".$discountCalculator->calcDiscount($inquiry);