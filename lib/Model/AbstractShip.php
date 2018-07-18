<?php

abstract class AbstractShip
{
    private $id;

    private $name;

    private $weaponPower = 0;

    private $strength = 0;

    abstract public function getJediFactor();

    abstract public function isFunctional();

    abstract public function getType();

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo 'Hello';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat = false)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        }
    }

    public function doesGivenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function setStrength($number)
    {
        if (!is_numeric($number)) {
            throw new \Exception('Strength must be a number, duh!');
        }
        $this->strength = $number;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }



    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}