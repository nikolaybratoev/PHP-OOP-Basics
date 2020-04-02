<?php
require_once "InvalidSongException.php";
require_once "InvalidArtistNameException.php";
require_once "InvalidSongLengthException.php";
require_once "InvalidSongMinutesException.php";
require_once "InvalidSongNameException.php";
require_once "InvalidSongSecondsException.php";

abstract class InvalidSongException extends Exception
{
    /**
     * @return string
     */
    protected function message(): string
    {
        return "Invalid song.";
    }
}