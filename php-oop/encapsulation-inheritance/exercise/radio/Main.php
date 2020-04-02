<?php
require_once "InvalidSongException.php";
require_once "InvalidArtistNameException.php";
require_once "InvalidSongLengthException.php";
require_once "InvalidSongMinutesException.php";
require_once "InvalidSongNameException.php";
require_once "InvalidSongSecondsException.php";
require_once "Song.php";

try {
    $song = new Song('ABBA', 'Mamma Mia', 3, 35);
} catch (InvalidArtistNameException $e) {
    echo $e->artistNameMessage();
} catch (InvalidSongMinutesException $e) {
    echo $e->songMinutesMessage();
} catch (InvalidSongNameException $e) {
    echo $e->songNameMessage();
} catch (InvalidSongSecondsException $e) {
    echo $e->songSecondsMessage();
}