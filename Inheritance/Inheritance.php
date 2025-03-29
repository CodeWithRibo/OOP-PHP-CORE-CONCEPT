<?php

spl_autoload_register(function($className){
        include "{$className}" . '.php';
});
#Physical Book
$physicalBook = new PhysicalBook(title: 'Boruto', author: 'Ukyō Kodachi', price: 350.00, weight: 200);
echo $physicalBook ->  displayDetails() . PHP_EOL;

#Electronic Book
$eBook = new Ebook(title: 'Naruto', author: 'Masashi Kishimoto', price: 550.00, fileSize: 200);
echo $eBook ->  displayDetails();
