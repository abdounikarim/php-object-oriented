<?php

namespace Model;

class BattleResult
{
    private $usedJediPowers;

    private $winningShip;

    private $losingShip;

    /**
     * BattleResult constructor.
     * @param $usedJediPowers
     * @param $winningShip
     * @param $losingShip
     */
    public function __construct($usedJediPowers, AbstractShip $winningShip = null, AbstractShip $losingShip = null)
    {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return boolean
     */
    public function getUsedJediPowers()
    {
        return $this->usedJediPowers;
    }

    /**
     * @param mixed $usedJediPowers
     */
    public function setUsedJediPowers($usedJediPowers)
    {
        $this->usedJediPowers = $usedJediPowers;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @param mixed $winningShip
     */
    public function setWinningShip($winningShip)
    {
        $this->winningShip = $winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    /**
     * @param mixed $losingShip
     */
    public function setLosingShip($losingShip)
    {
        $this->losingShip = $losingShip;
    }

    public function isThereAWinner()
    {
        return $this->getWinningShip() !== null;
    }
}
