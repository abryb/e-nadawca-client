<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing WspolrzednaGeograficznaType
 *
 * XSD Type: wspolrzednaGeograficznaType
 */
class WspolrzednaGeograficznaType
{
    /**
     * @var float $dec
     */
    protected $dec;

    /**
     * @var int $stopien
     */
    protected $stopien;

    /**
     * @var int $minuta
     */
    protected $minuta;

    /**
     * @var float $sekunda
     */
    protected $sekunda;

    /**
     * Gets as dec
     *
     * @return float
     */
    public function getDec()
    {
        return $this->dec;
    }

    /**
     * Sets a new dec
     *
     * @param float $dec
     *
     * @return self
     */
    public function setDec($dec)
    {
        $this->dec = $dec;

        return $this;
    }

    /**
     * Gets as stopien
     *
     * @return int
     */
    public function getStopien()
    {
        return $this->stopien;
    }

    /**
     * Sets a new stopien
     *
     * @param int $stopien
     *
     * @return self
     */
    public function setStopien($stopien)
    {
        $this->stopien = $stopien;

        return $this;
    }

    /**
     * Gets as minuta
     *
     * @return int
     */
    public function getMinuta()
    {
        return $this->minuta;
    }

    /**
     * Sets a new minuta
     *
     * @param int $minuta
     *
     * @return self
     */
    public function setMinuta($minuta)
    {
        $this->minuta = $minuta;

        return $this;
    }

    /**
     * Gets as sekunda
     *
     * @return float
     */
    public function getSekunda()
    {
        return $this->sekunda;
    }

    /**
     * Sets a new sekunda
     *
     * @param float $sekunda
     *
     * @return self
     */
    public function setSekunda($sekunda)
    {
        $this->sekunda = $sekunda;

        return $this;
    }
}
