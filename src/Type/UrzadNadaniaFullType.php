<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing UrzadNadaniaFullType
 *
 * XSD Type: urzadNadaniaFullType
 */
class UrzadNadaniaFullType
{
    /**
     * @var int $urzadNadania
     */
    protected $urzadNadania;

    /**
     * @var string $opis
     */
    protected $opis;

    /**
     * @var string $nazwaWydruk
     */
    protected $nazwaWydruk;

    /**
     * Gets as urzadNadania
     *
     * @return int
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Sets a new urzadNadania
     *
     * @param int $urzadNadania
     *
     * @return self
     */
    public function setUrzadNadania($urzadNadania)
    {
        $this->urzadNadania = $urzadNadania;

        return $this;
    }

    /**
     * Gets as opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Sets a new opis
     *
     * @param string $opis
     *
     * @return self
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Gets as nazwaWydruk
     *
     * @return string
     */
    public function getNazwaWydruk()
    {
        return $this->nazwaWydruk;
    }

    /**
     * Sets a new nazwaWydruk
     *
     * @param string $nazwaWydruk
     *
     * @return self
     */
    public function setNazwaWydruk($nazwaWydruk)
    {
        $this->nazwaWydruk = $nazwaWydruk;

        return $this;
    }
}
