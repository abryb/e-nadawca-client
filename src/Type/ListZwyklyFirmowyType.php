<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ListZwyklyFirmowyType
 *
 * XSD Type: listZwyklyFirmowyType
 */
class ListZwyklyFirmowyType extends PrzesylkaNieRejestrowanaType
{
    /**
     * @var bool $posteRestante
     */
    protected $posteRestante;

    /**
     * @var bool $miejscowa
     */
    protected $miejscowa;

    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var bool $egzemplarzBiblioteczny
     */
    protected $egzemplarzBiblioteczny;

    /**
     * @var bool $dlaOciemnialych
     */
    protected $dlaOciemnialych;

    /**
     * @var bool $obszarMiasto
     */
    protected $obszarMiasto;

    /**
     * @var string $kategoria
     */
    protected $kategoria;

    /**
     * @var string $gabaryt
     */
    protected $gabaryt;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $adres
     */
    protected $adres;

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
     * Gets as miejscowa
     *
     * @return bool
     */
    public function getMiejscowa()
    {
        return $this->miejscowa;
    }

    /**
     * Sets a new miejscowa
     *
     * @param bool $miejscowa
     *
     * @return self
     */
    public function setMiejscowa($miejscowa)
    {
        $this->miejscowa = $miejscowa;

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
     * Gets as egzemplarzBiblioteczny
     *
     * @return bool
     */
    public function getEgzemplarzBiblioteczny()
    {
        return $this->egzemplarzBiblioteczny;
    }

    /**
     * Sets a new egzemplarzBiblioteczny
     *
     * @param bool $egzemplarzBiblioteczny
     *
     * @return self
     */
    public function setEgzemplarzBiblioteczny($egzemplarzBiblioteczny)
    {
        $this->egzemplarzBiblioteczny = $egzemplarzBiblioteczny;

        return $this;
    }

    /**
     * Gets as dlaOciemnialych
     *
     * @return bool
     */
    public function getDlaOciemnialych()
    {
        return $this->dlaOciemnialych;
    }

    /**
     * Sets a new dlaOciemnialych
     *
     * @param bool $dlaOciemnialych
     *
     * @return self
     */
    public function setDlaOciemnialych($dlaOciemnialych)
    {
        $this->dlaOciemnialych = $dlaOciemnialych;

        return $this;
    }

    /**
     * Gets as obszarMiasto
     *
     * @return bool
     */
    public function getObszarMiasto()
    {
        return $this->obszarMiasto;
    }

    /**
     * Sets a new obszarMiasto
     *
     * @param bool $obszarMiasto
     *
     * @return self
     */
    public function setObszarMiasto($obszarMiasto)
    {
        $this->obszarMiasto = $obszarMiasto;

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
}
