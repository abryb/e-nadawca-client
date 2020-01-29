<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing KartaType
 *
 * XSD Type: kartaType
 */
class KartaType
{
    /**
     * @var int $idKarta
     */
    protected $idKarta;

    /**
     * @var string $opis
     */
    protected $opis;

    /**
     * @var bool $aktywna
     */
    protected $aktywna;

    /**
     * Gets as idKarta
     *
     * @return int
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Sets a new idKarta
     *
     * @param int $idKarta
     *
     * @return self
     */
    public function setIdKarta($idKarta)
    {
        $this->idKarta = $idKarta;

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
     * Gets as aktywna
     *
     * @return bool
     */
    public function getAktywna()
    {
        return $this->aktywna;
    }

    /**
     * Sets a new aktywna
     *
     * @param bool $aktywna
     *
     * @return self
     */
    public function setAktywna($aktywna)
    {
        $this->aktywna = $aktywna;

        return $this;
    }
}
