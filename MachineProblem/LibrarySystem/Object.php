<?php

spl_autoload_register(function ($className) {
    include "{$className}.php";
});

$eBookObj = new EBook(
    title: 'Naruto',
    author: 'Ribo',
    availability: true,
    fileSize: 100
);

echo $eBookObj->getDetails();
