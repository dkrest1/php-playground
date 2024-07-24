<?php

$age = 50;

// conditional
if($age >=18) {
    echo "You are an adult".PHP_EOL;
}else {
    echo "Youu are minor".PHP_EOL;
}

// loops
for ($i = 0; $i < 5; $i++) {
    echo $i .PHP_EOL;
}

// functions

function greet(string $name) {
    return "Hello $name".PHP_EOL;
}

echo greet("Tosin");

// Array
$fruits = ["apple", "banana", "cherry", "banana"];
echo $fruits[0].PHP_EOL;

// Object as related to javascript
$person = [
    "name" => "Oluwatosin",
    "age" => 40,
    "city" => "Lagos" 
];

echo $person["name"].PHP_EOL;

echo "one".PHP_EOL, "two".PHP_EOL, "three".PHP_EOL, "four".PHP_EOL;

print("Hello $age").PHP_EOL;