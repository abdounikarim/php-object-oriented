<?php

require __DIR__ . '/lib/Model/AbstractShip.php';
require __DIR__ . '/lib/Model/Ship.php';
require __DIR__ . '/lib/Model/RebelShip.php';
require __DIR__ . '/lib/Model/BrokenShip.php';
require __DIR__ . '/lib/Service/ShipStorageInterface.php';
require __DIR__ . '/lib/Service/PDOShipStorage.php';
require __DIR__ . '/lib/Service/JsonFileShipStorage.php';
require __DIR__ . '/lib/Service/ShipLoader.php';
require __DIR__ . '/lib/Model/BattleResult.php';
require __DIR__ . '/lib/Service/Container.php';

spl_autoload_register(function ($className) {
    $path = __DIR__.'/lib/'.str_replace('\\', '/', $className).'.php';

    if(file_exists($path)) {
        require $path;
    }
});

$configuration = [
    'db_dsn' => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => 'root'
];
