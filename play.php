<?php

class Ship
{
    public $name;

    public $weaponPower = 0;

    public $jediFactor = 0;

    public $strength = 0;

    public function sayHello()
    {
        echo 'Hello';
    }

    public function getName()
    {
        return $this->name;
    }
}

$myShip = new Ship();
$myShip->name = "Black Pearl";
$myShip->weaponPower = 10;

echo 'Ship name : '.$myShip->getName();
echo '<hr>';
$myShip->sayHello();
echo '<hr>';

var_dump($myShip->weaponPower);