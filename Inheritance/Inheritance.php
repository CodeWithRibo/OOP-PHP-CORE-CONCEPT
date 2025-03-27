<?php

require_once 'Book.php';

$physicalBook = new Book(title: 'Yowamushi Pedal', author: 'Wataru Watanabe', price: 500);
$digitalBook = new Book(title: 'Yowamushi Pedal', author: 'Wataru Watanabe', price: 500);

echo $physicalBook -> getAuthor() . PHP_EOL;
echo $digitalBook -> getAuthor() . PHP_EOL;
