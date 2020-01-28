<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing SubPrzesylkaPaletowaType
 *
 * XSD Type: subPrzesylkaPaletowaType
 */
class SubPrzesylkaPaletowaType extends PrzesylkaType
{
    /**
     * @var string $zawartosc
     */
    private $zawartosc;

    /**
     * @var int $masa
     */
    private $masa;

    /**
     * @var \Abryb\ENadawca\Type\PaletaType $paleta
     */
    private $paleta;

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
     * Gets as paleta
     *
     * @return \Abryb\ENadawca\Type\PaletaType
     */
    public function getPaleta()
    {
        return $this->paleta;
    }

    /**
     * Sets a new paleta
     *
     * @param \Abryb\ENadawca\Type\PaletaType $paleta
     *
     * @return self
     */
    public function setPaleta(PaletaType $paleta)
    {
        $this->paleta = $paleta;

        return $this;
    }
}
