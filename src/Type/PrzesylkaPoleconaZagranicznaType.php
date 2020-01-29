<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaPoleconaZagranicznaType
 *
 * XSD Type: przesylkaPoleconaZagranicznaType
 */
class PrzesylkaPoleconaZagranicznaType extends PrzesylkaRejestrowanaType
{
    /**
     * @var bool $posteRestante
     */
    protected $posteRestante;

    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var int $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru;

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
