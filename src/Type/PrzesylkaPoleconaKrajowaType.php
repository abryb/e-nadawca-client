<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaPoleconaKrajowaType
 *
 * XSD Type: przesylkaPoleconaKrajowaType
 */
class PrzesylkaPoleconaKrajowaType extends PrzesylkaRejestrowanaType
{
    /**
     * @var string $zasadySpecjalne
     */
    private $zasadySpecjalne;

    /**
     * @var bool $posteRestante
     */
    private $posteRestante;

    /**
     * @var int $iloscPotwierdzenOdbioru
     */
    private $iloscPotwierdzenOdbioru;

    /**
     * @var string $kategoria
     */
    private $kategoria;

    /**
     * Gabaryt przesyłki
     *
     * @var string $gabaryt
     */
    private $gabaryt;

    /**
     * Format przesyłki
     *
     * @var string $format
     */
    private $format;

    /**
     * @var int $masa
     */
    private $masa;

    /**
     * @var bool $egzemplarzBiblioteczny
     */
    private $egzemplarzBiblioteczny;

    /**
     * @var bool $dlaOciemnialych
     */
    private $dlaOciemnialych;

    /**
     * @var bool $obszarMiasto
     */
    private $obszarMiasto;

    /**
     * @var bool $miejscowa
     */
    private $miejscowa;

    /**
     * @var \Abryb\ENadawca\Type\EPOType $epo
     */
    private $epo;

    /**
     * Gets as zasadySpecjalne
     *
     * @return string
     */
    public function getZasadySpecjalne()
    {
        return $this->zasadySpecjalne;
    }

    /**
     * Sets a new zasadySpecjalne
     *
     * @param string $zasadySpecjalne
     *
     * @return self
     */
    public function setZasadySpecjalne($zasadySpecjalne)
    {
        $this->zasadySpecjalne = $zasadySpecjalne;

        return $this;
    }

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
     * Gets as iloscPotwierdzenOdbioru
     *
     * @return int
     */
    public function getIloscPotwierdzenOdbioru()
    {
        return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * Sets a new iloscPotwierdzenOdbioru
     *
     * @param int $iloscPotwierdzenOdbioru
     *
     * @return self
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
    {
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;

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
     * Gabaryt przesyłki
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
     * Gabaryt przesyłki
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
     * Gets as format
     *
     * Format przesyłki
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * Format przesyłki
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;

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
     * Gets as epo
     *
     * @return \Abryb\ENadawca\Type\EPOType
     */
    public function getEpo()
    {
        return $this->epo;
    }

    /**
     * Sets a new epo
     *
     * @param \Abryb\ENadawca\Type\EPOType $epo
     *
     * @return self
     */
    public function setEpo(EPOType $epo)
    {
        $this->epo = $epo;

        return $this;
    }
}
