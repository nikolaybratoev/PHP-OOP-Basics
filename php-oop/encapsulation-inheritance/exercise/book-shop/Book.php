<?php
require_once "GoldenEditionBook.php";

class Book
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $type;

    /**
     * Book constructor.
     * @param string $title
     * @param string $author
     * @param float $price
     * @param string $type
     * @throws Exception
     */
    public function __construct(string $title, string $author, float $price, string $type)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
        $this->setType($type);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @throws Exception
     */
    private function setTitle(string $title): void
    {
        if (strlen($title) < 3) {
            throw new Exception("Title not valid!");
        }
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @throws Exception
     */
    private function setAuthor(string $author): void
    {
        $char = $this->char_at($author);
        if (is_numeric($char)) {
            throw new Exception("Author not valid!");
        }
        $this->author = $author;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @throws Exception
     */
    private function setPrice(float $price): void
    {
        if ($price <= 0 || $price >= 200) {
            throw new Exception("Price not valid!");
        }
        $this->price = $price;
    }

    private function char_at($author)
    {
        $firstAndLastNames = explode(" ", $author);
        $lastName = $firstAndLastNames[1];
        return $lastName{0};
    }

    /**
     * @param string $type
     * @throws Exception
     */
    private function setType(string $type)
    {
        if ($type !== 'STANDARD' && $type !== 'GOLD') {
            throw new Exception("Type is not valid!");
        }
        $this->type = $type;
    }
}