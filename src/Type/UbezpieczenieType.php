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
}
