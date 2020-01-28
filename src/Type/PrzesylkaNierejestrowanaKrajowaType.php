<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaNierejestrowanaKrajowaType
 *
 * XSD Type: przesylkaNierejestrowanaKrajowaType
 */
class PrzesylkaNierejestrowanaKrajowaType extends PrzesylkaNieRejestrowanaType
{
    /**
     * @var string $kategoria
     */
    private $kategoria;

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
}
