<?php

class Ship
{
    public $name;
}

$myShip = new Ship();
$myShip->name = "Black Pearl";

echo 'Ship name : '.$myShip->name;