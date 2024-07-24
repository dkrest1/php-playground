<?php

require_once "file3.php";

$physicalBook = new Book("Great Mind", "Olu Bami", 1800);
$onlineBook = new Book("Think Big", "Mulik Aindo", 8367);

print($physicalBook->getPrice()).PHP_EOL;
print($onlineBook->getPrice()).PHP_EOL;
