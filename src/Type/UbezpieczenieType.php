<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing UbezpieczenieType
 *
 * XSD Type: ubezpieczenieType
 */
class UbezpieczenieType
{
    /**
     * @var string $rodzaj
     */
    protected $rodzaj;

    /**
     * @var float $kwota
     */
    protected $kwota;

    /**
     * @var bool $akceptacjaOWU
     */
    protected $akceptacjaOWU;

    /**
     * Gets as rodzaj
     *
     * @return string
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * Sets a new rodzaj
     *
     * @param string $rodzaj
     *
     * @return self
     */
    public function setRodzaj($rodzaj)
    {
        $this->rodzaj = $rodzaj;

        return $this;
    }

    /**
     * Gets as kwota
     *
     * @return float
     */
    public function getKwota()
    {
        return $this->kwota;
    }

    /**
     * Sets a new kwota
     *
     * @param float $kwota
     *
     * @return self
     */
    public function setKwota($kwota)
    {
        $this->kwota = $kwota;

        return $this;
    }

    /**
     * Gets as akceptacjaOWU
     *
     * @return bool
     */
    public function getAkceptacjaOWU()
    {
        return $this->akceptacjaOWU;
    }

    /**
     * Sets a new akceptacjaOWU
     *
     * @param bool $akceptacjaOWU
     *
     * @return self
     */
    public function setAkceptacjaOWU($akceptacjaOWU)
    {
        $this->akceptacjaOWU = $akceptacjaOWU;

        return $this;
    }
}
