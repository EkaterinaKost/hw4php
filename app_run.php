<?php

use Src\Books\DigitalBook;
use Src\Books\PhysicalBook;
use Src\Library\LibraryFund;

require_once __DIR__ . '/vendor/autoload.php';

$digitalBook = new DigitalBook("Лабиринт", "Лукьяненко", 2016, "https://example.com/download-link");
$physicalBook = new PhysicalBook("Руслан и Людмила", "Пушкин", 1965, "Ленина, 144");

$fund = new LibraryFund();
$fund->addBook($digitalBook);
$fund->addBook($physicalBook);

$digitalBook->incrementBookReadCount();
$physicalBook->incrementBookReadCount();

$deliveryMethods = $fund->getAllDeliveryMethods();
print_r($deliveryMethods);

$totalReadCount = $fund->getTotalReadCount();
echo "Total Read Count: $totalReadCount";