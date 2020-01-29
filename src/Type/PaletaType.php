<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PaletaType
 *
 * XSD Type: paletaType
 */
class PaletaType
{
    /**
     * @var string $rodzajPalety
     */
    protected $rodzajPalety;

    /**
     * @var int $szerokosc
     */
    protected $szerokosc;

    /**
     * @var string $dlugosc
     */
    protected $dlugosc;

    /**
     * @var string $wysokosc
     */
    protected $wysokosc;

    /**
     * Gets as rodzajPalety
     *
     * @return string
     */
    public function getRodzajPalety()
    {
        return $this->rodzajPalety;
    }

    /**
     * Sets a new rodzajPalety
     *
     * @param string $rodzajPalety
     *
     * @return self
     */
    public function setRodzajPalety($rodzajPalety)
    {
        $this->rodzajPalety = $rodzajPalety;

        return $this;
    }

    /**
     * Gets as szerokosc
     *
     * @return int
     */
    public function getSzerokosc()
    {
        return $this->szerokosc;
    }

    /**
     * Sets a new szerokosc
     *
     * @param int $szerokosc
     *
     * @return self
     */
    public function setSzerokosc($szerokosc)
    {
        $this->szerokosc = $szerokosc;

        return $this;
    }

    /**
     * Gets as dlugosc
     *
     * @return string
     */
    public function getDlugosc()
    {
        return $this->dlugosc;
    }

    /**
     * Sets a new dlugosc
     *
     * @param string $dlugosc
     *
     * @return self
     */
    public function setDlugosc($dlugosc)
    {
        $this->dlugosc = $dlugosc;

        return $this;
    }

    /**
     * Gets as wysokosc
     *
     * @return string
     */
    public function getWysokosc()
    {
        return $this->wysokosc;
    }

    /**
     * Sets a new wysokosc
     *
     * @param string $wysokosc
     *
     * @return self
     */
    public function setWysokosc($wysokosc)
    {
        $this->wysokosc = $wysokosc;

        return $this;
    }
}
