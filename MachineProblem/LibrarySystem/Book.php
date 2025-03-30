<?php
#Problem Statement: Library Sytstem
class Book
{
    #Visibility of the property to make sure the details is hide
    private string $title;
    private string $author;
    protected bool $availability;

    #Implement constructor to set the value of the property
    public function __construct(string $title, string $author, bool $availability)
    {
        $this->title = $title;
        $this->author = $author;
        $this->availability = $availability;
    }

    #retrieve the data
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function isAvailable(): bool
    {
        return $this->availability === true;
    }
}
