<?php
require_once "InvalidSongException.php";
require_once "InvalidArtistNameException.php";
require_once "InvalidSongLengthException.php";
require_once "InvalidSongMinutesException.php";
require_once "InvalidSongNameException.php";
require_once "InvalidSongSecondsException.php";

abstract class InvalidSongLengthException extends InvalidSongException
{
    /**
     * @return string
     */
    protected function songLengthMessage(): string
    {
        return "Invalid song length.";
    }
}