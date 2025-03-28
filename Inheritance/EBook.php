<?php
#Electronic Book
require_once 'Book.php';
class EBook extends Book
{
    public $fileSize; //set property filesize for electronic book

    public function __construct(string $title, string $author, float $price, int $fileSize)  //extend the parent parameter and add file size
    {
        parent::__construct(title: $title, author: $author, price: $price ); //call the parent constructor inside the subclass constructor to set a value
        $this -> fileSize = $fileSize;
    }
    #display the details of the parent and subclass 
    public function displayDetails(): string
    {
        $title = $this -> getTitle();
        $author = $this -> getAuthor(); 
        $price = $this -> getPriceAsCurrency();
        $fileSize = $this -> fileSize;

        return "Title: {$title} \n Author: {$author} \n Price: {$price} \n File Size: {$fileSize}MB";
    }
}