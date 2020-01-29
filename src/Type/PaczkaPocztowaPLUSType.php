<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PaczkaPocztowaPLUSType
 *
 * XSD Type: paczkaPocztowaPLUSType
 */
class PaczkaPocztowaPLUSType extends PrzesylkaRejestrowanaType
{
    /**
     * @var bool $posteRestante
     */
    protected $posteRestante;

    /**
     * @var int $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru;

    /**
     * @var string $kategoria
     */
    protected $kategoria;

    /**
     * @var string $gabaryt
     */
    protected $gabaryt;

    /**
     * @var int $wartosc
     */
    protected $wartosc;

    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var bool $zwrotDoslanie
     */
    protected $zwrotDoslanie;

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
     * Gets as zwrotDoslanie
     *
     * @return bool
     */
    public function getZwrotDoslanie()
    {
        return $this->zwrotDoslanie;
    }

    /**
     * Sets a new zwrotDoslanie
     *
     * @param bool $zwrotDoslanie
     *
     * @return self
     */
    public function setZwrotDoslanie($zwrotDoslanie)
    {
        $this->zwrotDoslanie = $zwrotDoslanie;

        return $this;
    }
}
