<?php

class Book 
{
    public $title;
    public $author;
    public $price;

    public function __construct(string $title, string $author, string $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }
    
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    
}