<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaFirmowaPoleconaType
 *
 * XSD Type: przesylkaFirmowaPoleconaType
 */
class PrzesylkaFirmowaPoleconaType extends PrzesylkaRejestrowanaType
{
    /**
     * @var string $zasadySpecjalne
     */
    protected $zasadySpecjalne;

    /**
     * @var bool $posteRestante
     */
    protected $posteRestante;

    /**
     * @var int $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru;

    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var bool $miejscowa
     */
    protected $miejscowa;

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
     * @var \Abryb\ENadawca\Type\EPOType $epo
     */
    protected $epo;

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
