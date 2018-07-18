<?php

require __DIR__ . '/lib/Model/AbstractShip.php';
require __DIR__ . '/lib/Model/Ship.php';
require __DIR__ . '/lib/Model/RebelShip.php';
require __DIR__ . '/lib/Model/BrokenShip.php';
require __DIR__ . '/lib/Service/AbstractShipStorage.php';
require __DIR__ . '/lib/Service/PDOShipStorage.php';
require __DIR__ . '/lib/Service/JsonFileShipStorage.php';
require __DIR__ . '/lib/Service/ShipLoader.php';
require __DIR__ . '/lib/Service/BattleManager.php';
require __DIR__ . '/lib/Model/BattleResult.php';
require __DIR__ . '/lib/Service/Container.php';

$configuration = [
    'db_dsn' => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => 'root'
];
