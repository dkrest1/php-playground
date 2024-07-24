<?php

declare (strict_types = 1);

require_once "php-class.php";

$product = new Product('Chair', 3000);

print ($product->printCurrency()).PHP_EOL;
print $product->name.PHP_EOL;