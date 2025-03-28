<?php
#Books
class Book
{
    #Add Property of the book
    public $title;
    public $author;
    public $price;

    #Set the property to get the value using constructor
    public function __construct(string $title, string $author, float $price)
    {
        $this -> title = $title;
        $this -> author = $author;
        $this -> price = $price;
    }
    //Use method to passed the value
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPriceAsCurrency(): string
    {
        $formattedCurrency = $this->price / 100;//convert the cents to dollars
        return '$' . number_format($formattedCurrency, 2);
    }

}