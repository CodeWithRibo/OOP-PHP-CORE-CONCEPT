<?php 
require_once 'Book.php';

class PhysicalBook extends Book
{
    public $weight; //set property weight for physical book

    public function __construct(string $title, string $author, float $price, int $weight)  //extend the parent parameter and add weight
    {
        Book::__construct(title: $title, author: $author, price: $price ); //call the parent constructor inside the subclass constructor to set a value
        $this -> weight = $weight; 
    }

    #display the details of the parent and subclass 
    public function displayDetails(): string
    {
        $title = $this -> getTitle();
        $author = $this -> getAuthor(); 
        $price = $this -> getPriceAsCurrency();
        $weight = $this -> weight;

        return "Title: {$title} \n Author: {$author} \n Price: {$price} \n Weight: {$weight}g";
    }
}