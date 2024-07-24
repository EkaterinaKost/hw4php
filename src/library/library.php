<?php
namespace Src\Library;

use Src\Books\Book;

abstract class Library
{
    private LibraryFund $libraryFund;

    public function __construct()
    {
        $this->libraryFund = new libraryFund();
    }
}

class LibraryFund
{
    protected array $books;

    public function __construct()
    {
        $this->books = [];
    }

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function getAllDeliveryMethods(): array
    {
        $deliveryMethods = [];

        foreach ($this->books as $book) {
            $deliveryMethods[] = $book->getDeliveryMethod();
        }

        return $deliveryMethods;
    }

    public function getTotalReadCount(): int
    {
        $totalReadCount = 0;

        foreach ($this->books as $book) {
            $totalReadCount += $book->getReadCount();
        }

        return $totalReadCount;
    }
}

