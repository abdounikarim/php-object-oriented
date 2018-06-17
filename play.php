<?php

require __DIR__ . '/lib/Ship.php';

$myShip = new Ship();
$myShip->name = "Black Pearl";
$myShip->weaponPower = 10;

/**
 * @param Ship $someShip
 */
function printShipSummary($someShip)
{
    echo 'Ship name : '.$someShip->getName();
    echo '<hr>';
    $someShip->sayHello();
    echo '<hr>';
    echo 'Ship description : '.$someShip->getNameAndSpecs(false);
    echo '<hr>';
    echo 'Ship description : '.$someShip->getNameAndSpecs(true);
}
printShipSummary($myShip);

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

echo '<hr>';
printShipSummary($otherShip);

echo '<hr>';
if($myShip->doesGivenShipHaveMoreStrength($otherShip)) {
    echo $otherShip->name.' has more strength';
} else {
    echo $myShip->name.' has more strength';
}
