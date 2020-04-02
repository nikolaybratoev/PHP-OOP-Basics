<?php
require_once "Book.php";

class GoldenEditionBook extends Book
{

    /**
     * GoldenEditionBook constructor.
     * @param string $title
     * @param string $author
     * @param float $price
     * @param string $type
     * @throws Exception
     */
    public function __construct(string $title, string $author, float $price, string $type)
    {
        parent::__construct($title, $author, $price, $type);
    }

    public function getPrice(): float
    {
        return parent::getPrice() * 1.3;
    }
}