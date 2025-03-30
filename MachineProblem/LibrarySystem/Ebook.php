<?php

require_once 'Book.php';

class Ebook extends Book
{
    private int $fileSize;

    #using construct extend the parameter with filesize
    public function __construct(string $title, string $author, bool $availability, int $fileSize)
    {
        #calling the parent of the construct to set the value to the subclass
        parent::__construct(title: $title, author: $author, availability: $availability);
        $this->fileSize = $fileSize;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    #Override the method then added the file size
    public function getDetails(): string
    {
        $title = parent::getTitle();
        $author = parent::getAuthor();
        $availability = parent::isAvailable() === true ? 'Book is available' : 'Book is not available';
        $fileSize = $this->getFileSize();
        
        return "Title: {$title} \n Author: {$author} \n  File Size: {$fileSize}mb \n availability : {$availability} \n";
    }
    
}
