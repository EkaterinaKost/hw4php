<?php

namespace Src\Books;

abstract class Book
{
    protected string $title;
    protected string $author;
    protected string $releaseDate;
    protected int $bookReadCount;

    public function __construct($title, $author, $releaseDate)
    {
        $this->title = $title;
        $this->author = $author;
        $this->releaseDate = $releaseDate;
        $this->bookReadCount = 0;
    }

    abstract public function getDeliveryMethod(): string;

    public function incrementBookReadCount(): void
    {
        $this->bookReadCount++;
    }

    public function getReadCount(): int
    {
        return $this->bookReadCount;
    }
}

class DigitalBook extends Book
{
    protected string $bookURL;

    public function __construct($title, $author, $releaseDate, $bookURL)
    {
        parent::__construct($title, $author, $releaseDate);
        $this->bookURL = $bookURL;
    }

    public function getDeliveryMethod(): string
    {
        return $this->bookURL;
    }
}

class PhysicalBook extends Book
{
    protected string $libraryAddress;

    public function __construct($title, $author,$releaseDate, $libraryAddress)
    {
        parent::__construct($title, $author, $releaseDate);
        $this->libraryAddress = $libraryAddress;
    }

    public function getDeliveryMethod(): string
    {
        return $this->libraryAddress;
    }
}