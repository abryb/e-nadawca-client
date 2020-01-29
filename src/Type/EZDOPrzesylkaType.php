<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing EZDOPrzesylkaType
 *
 * XSD Type: EZDOPrzesylkaType
 */
class EZDOPrzesylkaType
{
    /**
     * @var string $numerNadania
     */
    protected $numerNadania;

    /**
     * @var string $rodzaj
     */
    protected $rodzaj;

    /**
     * @var string $kategoria
     */
    protected $kategoria;

    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var int $wartosc
     */
    protected $wartosc;

    /**
     * @var int $kwotaPobrania
     */
    protected $kwotaPobrania;

    /**
     * @var string $numerWewnetrznyPrzesylki
     */
    protected $numerWewnetrznyPrzesylki;

    /**
     * @var string $zwrot
     */
    protected $zwrot;

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     *
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;

        return $this;
    }

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
     * Gets as kategoria
     *
     * @return string
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Sets a new kategoria
     *
     * @param string $kategoria
     *
     * @return self
     */
    public function setKategoria($kategoria)
    {
        $this->kategoria = $kategoria;

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
     * Gets as kwotaPobrania
     *
     * @return int
     */
    public function getKwotaPobrania()
    {
        return $this->kwotaPobrania;
    }

    /**
     * Sets a new kwotaPobrania
     *
     * @param int $kwotaPobrania
     *
     * @return self
     */
    public function setKwotaPobrania($kwotaPobrania)
    {
        $this->kwotaPobrania = $kwotaPobrania;

        return $this;
    }

    /**
     * Gets as numerWewnetrznyPrzesylki
     *
     * @return string
     */
    public function getNumerWewnetrznyPrzesylki()
    {
        return $this->numerWewnetrznyPrzesylki;
    }

    /**
     * Sets a new numerWewnetrznyPrzesylki
     *
     * @param string $numerWewnetrznyPrzesylki
     *
     * @return self
     */
    public function setNumerWewnetrznyPrzesylki($numerWewnetrznyPrzesylki)
    {
        $this->numerWewnetrznyPrzesylki = $numerWewnetrznyPrzesylki;

        return $this;
    }

    /**
     * Gets as zwrot
     *
     * @return string
     */
    public function getZwrot()
    {
        return $this->zwrot;
    }

    /**
     * Sets a new zwrot
     *
     * @param string $zwrot
     *
     * @return self
     */
    public function setZwrot($zwrot)
    {
        $this->zwrot = $zwrot;

        return $this;
    }
}
