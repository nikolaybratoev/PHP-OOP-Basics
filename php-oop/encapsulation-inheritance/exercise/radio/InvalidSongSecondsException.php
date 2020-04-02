<?php
require_once "InvalidSongException.php";
require_once "InvalidArtistNameException.php";
require_once "InvalidSongLengthException.php";
require_once "InvalidSongMinutesException.php";
require_once "InvalidSongNameException.php";
require_once "InvalidSongSecondsException.php";

class InvalidSongSecondsException extends InvalidSongLengthException
{
    /**
     * @return string
     */
    public function songSecondsMessage(): string
    {
        return "Song seconds should be between 0 and 59.";
    }
}