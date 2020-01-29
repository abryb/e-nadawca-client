<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaZagranicznaType
 *
 * XSD Type: przesylkaZagranicznaType
 */
class PrzesylkaZagranicznaType extends PrzesylkaNieRejestrowanaType
{
    /**
     * @var bool $posteRestante
     */
    protected $posteRestante;

    /**
     * @var string $kategoria
     */
    protected $kategoria;

    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var bool $ekspres
     */
    protected $ekspres;

    /**
     * @var string $kraj
     */
    protected $kraj;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $adres
     */
    protected $adres;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $nadawca
     */
    protected $nadawca;

    /**
     * @var \Abryb\ENadawca\Type\DeklaracjaCelna2Type $deklaracjaCelna2
     */
    protected $deklaracjaCelna2;

    /**
     * Gets as posteRestante
     *
     * @return bool
     */
    public function getPosteRestante()
    {
        return $this->posteRestante;
    }

    /**
     * Sets a new posteRestante
     *
     * @param bool $posteRestante
     *
     * @return self
     */
    public function setPosteRestante($posteRestante)
    {
        $this->posteRestante = $posteRestante;

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
     * Gets as ekspres
     *
     * @return bool
     */
    public function getEkspres()
    {
        return $this->ekspres;
    }

    /**
     * Sets a new ekspres
     *
     * @param bool $ekspres
     *
     * @return self
     */
    public function setEkspres($ekspres)
    {
        $this->ekspres = $ekspres;

        return $this;
    }

    /**
     * Gets as kraj
     *
     * @return string
     */
    public function getKraj()
    {
        return $this->kraj;
    }

    /**
     * Sets a new kraj
     *
     * @param string $kraj
     *
     * @return self
     */
    public function setKraj($kraj)
    {
        $this->kraj = $kraj;

        return $this;
    }

    /**
     * Gets as adres
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \Abryb\ENadawca\Type\AdresType $adres
     *
     * @return self
     */
    public function setAdres(AdresType $adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Gets as nadawca
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getNadawca()
    {
        return $this->nadawca;
    }

    /**
     * Sets a new nadawca
     *
     * @param \Abryb\ENadawca\Type\AdresType $nadawca
     *
     * @return self
     */
    public function setNadawca(AdresType $nadawca)
    {
        $this->nadawca = $nadawca;

        return $this;
    }

    /**
     * Gets as deklaracjaCelna2
     *
     * @return \Abryb\ENadawca\Type\DeklaracjaCelna2Type
     */
    public function getDeklaracjaCelna2()
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * Sets a new deklaracjaCelna2
     *
     * @param \Abryb\ENadawca\Type\DeklaracjaCelna2Type $deklaracjaCelna2
     *
     * @return self
     */
    public function setDeklaracjaCelna2(DeklaracjaCelna2Type $deklaracjaCelna2)
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;

        return $this;
    }
}
