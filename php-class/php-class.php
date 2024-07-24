<?php

class Product 
{
    public $name;
    public $price;

    /**
     * @param string $name
     * @param int $price 
     */

    public function __construct(string $name, int $price) 
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function printCurrency($divisor = 1, $currencySymbol = '$') 
    {
        $priceAsCurrency = $this->price / $divisor;

        return $currencySymbol. $priceAsCurrency;
    }
}

$product = new Product('Chocolate', 600);
print $product->name.PHP_EOL;
print $product->price.PHP_EOL;


print($product->printCurrency()).PHP_EOL;

