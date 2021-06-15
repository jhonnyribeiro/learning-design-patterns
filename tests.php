<?php

use Learning\DesignPattern\Models\Inquiry;
use Learning\DesignPattern\Services\TaxCalculator;

require 'vendor/autoload.php';

$calculator = new TaxCalculator();

$inquiry = new Inquiry();
$inquiry->value = 100;

echo $calculator->calc($inquiry, "ICMS");
