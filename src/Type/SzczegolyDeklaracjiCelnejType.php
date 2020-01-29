<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing SzczegolyDeklaracjiCelnejType
 *
 * XSD Type: szczegolyDeklaracjiCelnejType
 */
class SzczegolyDeklaracjiCelnejType
{
    /**
     * @var string $zawartosc
     */
    protected $zawartosc;

    /**
     * @var float $ilosc
     */
    protected $ilosc;

    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var int $wartosc
     */
    protected $wartosc;

    /**
     * @var string $numerTaryfowy
     */
    protected $numerTaryfowy;

    /**
     * @var string $krajPochodzenia
     */
    protected $krajPochodzenia;

    /**
     * Gets as zawartosc
     *
     * @return string
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Sets a new zawartosc
     *
     * @param string $zawartosc
     *
     * @return self
     */
    public function setZawartosc($zawartosc)
    {
        $this->zawartosc = $zawartosc;

        return $this;
    }

    /**
     * Gets as ilosc
     *
     * @return float
     */
    public function getIlosc()
    {
        return $this->ilosc;
    }

    /**
     * Sets a new ilosc
     *
     * @param float $ilosc
     *
     * @return self
     */
    public function setIlosc($ilosc)
    {
        $this->ilosc = $ilosc;

        return $this;
    }

    /**
     * Gets as masa
     *
     * @return int
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Sets a new masa
     *
     * @param int $masa
     *
     * @return self
     */
    public function setMasa($masa)
    {
        $this->masa = $masa;

        return $this;
    }

    /**
     * Gets as wartosc
     *
     * @return int
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Sets a new wartosc
     *
     * @param int $wartosc
     *
     * @return self
     */
    public function setWartosc($wartosc)
    {
        $this->wartosc = $wartosc;

        return $this;
    }

    /**
     * Gets as numerTaryfowy
     *
     * @return string
     */
    public function getNumerTaryfowy()
    {
        return $this->numerTaryfowy;
    }

    /**
     * Sets a new numerTaryfowy
     *
     * @param string $numerTaryfowy
     *
     * @return self
     */
    public function setNumerTaryfowy($numerTaryfowy)
    {
        $this->numerTaryfowy = $numerTaryfowy;

        return $this;
    }

    /**
     * Gets as krajPochodzenia
     *
     * @return string
     */
    public function getKrajPochodzenia()
    {
        return $this->krajPochodzenia;
    }

    /**
     * Sets a new krajPochodzenia
     *
     * @param string $krajPochodzenia
     *
     * @return self
     */
    public function setKrajPochodzenia($krajPochodzenia)
    {
        $this->krajPochodzenia = $krajPochodzenia;

        return $this;
    }
}
