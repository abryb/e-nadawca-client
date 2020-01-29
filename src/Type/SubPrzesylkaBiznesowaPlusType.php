<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing SubPrzesylkaBiznesowaPlusType
 *
 * XSD Type: subPrzesylkaBiznesowaPlusType
 */
class SubPrzesylkaBiznesowaPlusType extends PrzesylkaType
{
    /**
     * @var string $numerNadania
     */
    protected $numerNadania;

    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var string $gabaryt
     */
    protected $gabaryt;

    /**
     * @var int $wartosc
     */
    protected $wartosc;

    /**
     * @var bool $ostroznie
     */
    protected $ostroznie;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta;

    /**
     * @var int $kwotaTranzakcji
     */
    protected $kwotaTranzakcji;

    /**
     * @var string $numerTransakcjiOdbioru
     */
    protected $numerTransakcjiOdbioru;

    /**
     * @var \Abryb\ENadawca\Type\PobranieType $pobranie
     */
    protected $pobranie;

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
     * Gets as gabaryt
     *
     * @return string
     */
    public function getGabaryt()
    {
        return $this->gabaryt;
    }

    /**
     * Sets a new gabaryt
     *
     * @param string $gabaryt
     *
     * @return self
     */
    public function setGabaryt($gabaryt)
    {
        $this->gabaryt = $gabaryt;

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
     * Gets as ostroznie
     *
     * @return bool
     */
    public function getOstroznie()
    {
        return $this->ostroznie;
    }

    /**
     * Sets a new ostroznie
     *
     * @param bool $ostroznie
     *
     * @return self
     */
    public function setOstroznie($ostroznie)
    {
        $this->ostroznie = $ostroznie;

        return $this;
    }

    /**
     * Gets as numerPrzesylkiKlienta
     *
     * @return string
     */
    public function getNumerPrzesylkiKlienta()
    {
        return $this->numerPrzesylkiKlienta;
    }

    /**
     * Sets a new numerPrzesylkiKlienta
     *
     * @param string $numerPrzesylkiKlienta
     *
     * @return self
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;

        return $this;
    }

    /**
     * Gets as kwotaTranzakcji
     *
     * @return int
     */
    public function getKwotaTranzakcji()
    {
        return $this->kwotaTranzakcji;
    }

    /**
     * Sets a new kwotaTranzakcji
     *
     * @param int $kwotaTranzakcji
     *
     * @return self
     */
    public function setKwotaTranzakcji($kwotaTranzakcji)
    {
        $this->kwotaTranzakcji = $kwotaTranzakcji;

        return $this;
    }

    /**
     * Gets as numerTransakcjiOdbioru
     *
     * @return string
     */
    public function getNumerTransakcjiOdbioru()
    {
        return $this->numerTransakcjiOdbioru;
    }

    /**
     * Sets a new numerTransakcjiOdbioru
     *
     * @param string $numerTransakcjiOdbioru
     *
     * @return self
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
    {
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;

        return $this;
    }

    /**
     * Gets as pobranie
     *
     * @return \Abryb\ENadawca\Type\PobranieType
     */
    public function getPobranie()
    {
        return $this->pobranie;
    }

    /**
     * Sets a new pobranie
     *
     * @param \Abryb\ENadawca\Type\PobranieType $pobranie
     *
     * @return self
     */
    public function setPobranie(PobranieType $pobranie)
    {
        $this->pobranie = $pobranie;

        return $this;
    }
}
