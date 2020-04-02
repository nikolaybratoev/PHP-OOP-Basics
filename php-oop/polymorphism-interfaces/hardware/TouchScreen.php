<?php


interface TouchScreen
{
    public function moveFinger(): void ;

    public function clickFinger(): void ;

    public function writeText(): string ;
}