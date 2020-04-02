<?php
require_once "InvalidSongException.php";
require_once "InvalidArtistNameException.php";
require_once "InvalidSongLengthException.php";
require_once "InvalidSongMinutesException.php";
require_once "InvalidSongNameException.php";
require_once "InvalidSongSecondsException.php";

class Song
{
    /**
     * @var string
     */
    private $artistName;

    /**
     * @var string
     */
    private $songName;

    /**
     * @var integer
     */
    private $minutes;

    /**
     * @var integer
     */
    private $seconds;

    /**
     * Song constructor.
     * @param string $artistName
     * @param string $songName
     * @param int $minutes
     * @param int $seconds
     * @throws InvalidArtistNameException Artist name should be between 3 and 20 symbols.
     * @throws InvalidSongMinutesException Song name should be between 3 and 30 symbols.
     * @throws InvalidSongNameException Song minutes should be between 0 and 14.
     * @throws InvalidSongSecondsException Song seconds should be between 0 and 59.
     */
    public function __construct(string $artistName, string $songName, int $minutes, int $seconds)
    {
        $this->setArtistName($artistName);
        $this->setSongName($songName);
        $this->setMinutes($minutes);
        $this->setSeconds($seconds);
    }

    /**
     * @return string
     */
    public function getArtistName(): string
    {
        return $this->artistName;
    }

    /**
     * @param string $artistName
     * @throws InvalidArtistNameException
     */
    private function setArtistName(string $artistName): void
    {
        if (strlen($artistName) < 3 || strlen($artistName) > 20) {
            throw new InvalidArtistNameException();
        }
        $this->artistName = $artistName;
    }

    /**
     * @return string
     */
    public function getSongName(): string
    {
        return $this->songName;
    }

    /**
     * @param string $songName
     * @throws InvalidSongNameException
     */
    private function setSongName(string $songName): void
    {
        if (strlen($songName) < 3 || strlen($songName) > 30) {
            throw new InvalidSongNameException();
        }
        $this->songName = $songName;
    }

    /**
     * @return int
     */
    public function getMinutes(): int
    {
        return $this->minutes;
    }

    /**
     * @param int $minutes
     * @throws InvalidSongMinutesException
     */
    private function setMinutes(int $minutes): void
    {
        if ($minutes > 14 || $minutes < 0) {
            throw new InvalidSongMinutesException();
        }
        $this->minutes = $minutes;
    }

    /**
     * @return int
     */
    public function getSeconds(): int
    {
        return $this->seconds;
    }

    /**
     * @param int $seconds
     * @throws InvalidSongSecondsException
     */
    private function setSeconds(int $seconds): void
    {
        if ($seconds > 59 || $seconds < 0) {
            throw new InvalidSongSecondsException();
        }
        $this->seconds = $seconds;
    }
}