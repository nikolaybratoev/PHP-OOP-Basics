<?php
require_once "InvalidSongException.php";
require_once "InvalidArtistNameException.php";
require_once "InvalidSongLengthException.php";
require_once "InvalidSongMinutesException.php";
require_once "InvalidSongNameException.php";
require_once "InvalidSongSecondsException.php";

class InvalidSongNameException extends InvalidSongException
{
    /**
     * @return string
     */
    public function songNameMessage(): string
    {
        return "Song name should be between 3 and 30 symbols.";
    }
}