<?php
require_once "InvalidSongException.php";
require_once "InvalidArtistNameException.php";
require_once "InvalidSongLengthException.php";
require_once "InvalidSongMinutesException.php";
require_once "InvalidSongNameException.php";
require_once "InvalidSongSecondsException.php";

class InvalidArtistNameException extends InvalidSongException
{
    /**
     * @return string
     */
    public function artistNameMessage(): string
    {
        return "Artist name should be between 3 and 20 symbols.";
    }
}