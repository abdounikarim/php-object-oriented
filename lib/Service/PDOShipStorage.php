<?php

namespace Service;

class PDOShipStorage implements ShipStorageInterface
{
    private $pdo;

    public function __construct(PDO $pdo)
    {

        $this->pdo = $pdo;
    }

    public function fetchAllShipsData()
    {
        $statement = $this->pdo->query('SELECT * FROM ship');
        $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $shipsArray;
    }

    public function fetchSingleShipData($id)
    {
        $pdo = $this->pdo;
        $statement = $pdo->prepare('SELECT * FROM ship WHERE id = :id');
        $statement->execute([
            'id' => $id
        ]);
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC);

        if(!$shipArray) {
            return null;
        }

        return $shipArray;
    }
}