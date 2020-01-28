<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing WplataCKPType
 *
 * XSD Type: wplataCKPType
 */
class WplataCKPType
{
    /**
     * @var string $unikalnyIdentyfikatorWplaty
     */
    private $unikalnyIdentyfikatorWplaty;

    /**
     * @var string $numerNadania
     */
    private $numerNadania;

    /**
     * Kwota w groszach
     *
     * @var int $kwota
     */
    private $kwota;

    /**
     * @var \DateTime $dataPobrania
     */
    private $dataPobrania;

    /**
     * @var \DateTime $dataPrzelewu
     */
    private $dataPrzelewu;

    /**
     * @var int $idUmowy
     */
    private $idUmowy;

    /**
     * @var string $tytulPrzelewuZbiorczego
     */
    private $tytulPrzelewuZbiorczego;

    /**
     * Gets as unikalnyIdentyfikatorWplaty
     *
     * @return string
     */
    public function getUnikalnyIdentyfikatorWplaty()
    {
        return $this->unikalnyIdentyfikatorWplaty;
    }

    /**
     * Sets a new unikalnyIdentyfikatorWplaty
     *
     * @param string $unikalnyIdentyfikatorWplaty
     *
     * @return self
     */
    public function setUnikalnyIdentyfikatorWplaty($unikalnyIdentyfikatorWplaty)
    {
        $this->unikalnyIdentyfikatorWplaty = $unikalnyIdentyfikatorWplaty;

        return $this;
    }

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     *
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;

        return $this;
    }

    /**
     * Gets as kwota
     *
     * Kwota w groszach
     *
     * @return int
     */
    public function getKwota()
    {
        return $this->kwota;
    }

    /**
     * Sets a new kwota
     *
     * Kwota w groszach
     *
     * @param int $kwota
     *
     * @return self
     */
    public function setKwota($kwota)
    {
        $this->kwota = $kwota;

        return $this;
    }

    /**
     * Gets as dataPobrania
     *
     * @return \DateTime
     */
    public function getDataPobrania()
    {
        return $this->dataPobrania;
    }

    /**
     * Sets a new dataPobrania
     *
     * @return self
     */
    public function setDataPobrania(\DateTime $dataPobrania)
    {
        $this->dataPobrania = $dataPobrania;

        return $this;
    }

    /**
     * Gets as dataPrzelewu
     *
     * @return \DateTime
     */
    public function getDataPrzelewu()
    {
        return $this->dataPrzelewu;
    }

    /**
     * Sets a new dataPrzelewu
     *
     * @return self
     */
    public function setDataPrzelewu(\DateTime $dataPrzelewu)
    {
        $this->dataPrzelewu = $dataPrzelewu;

        return $this;
    }

    /**
     * Gets as idUmowy
     *
     * @return int
     */
    public function getIdUmowy()
    {
        return $this->idUmowy;
    }

    /**
     * Sets a new idUmowy
     *
     * @param int $idUmowy
     *
     * @return self
     */
    public function setIdUmowy($idUmowy)
    {
        $this->idUmowy = $idUmowy;

        return $this;
    }

    /**
     * Gets as tytulPrzelewuZbiorczego
     *
     * @return string
     */
    public function getTytulPrzelewuZbiorczego()
    {
        return $this->tytulPrzelewuZbiorczego;
    }

    /**
     * Sets a new tytulPrzelewuZbiorczego
     *
     * @param string $tytulPrzelewuZbiorczego
     *
     * @return self
     */
    public function setTytulPrzelewuZbiorczego($tytulPrzelewuZbiorczego)
    {
        $this->tytulPrzelewuZbiorczego = $tytulPrzelewuZbiorczego;

        return $this;
    }
}
