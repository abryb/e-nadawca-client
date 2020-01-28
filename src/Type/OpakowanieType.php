<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing OpakowanieType
 *
 * XSD Type: opakowanieType
 */
class OpakowanieType
{
    /**
     * @var string $opakowanieGuid
     */
    private $opakowanieGuid;

    /**
     * @var string $typ
     */
    private $typ;

    /**
     * @var string $sygnatura
     */
    private $sygnatura;

    /**
     * @var int $ilosc
     */
    private $ilosc;

    /**
     * @var string $numerOpakowaniaZbiorczego
     */
    private $numerOpakowaniaZbiorczego;

    /**
     * Gets as opakowanieGuid
     *
     * @return string
     */
    public function getOpakowanieGuid()
    {
        return $this->opakowanieGuid;
    }

    /**
     * Sets a new opakowanieGuid
     *
     * @param string $opakowanieGuid
     *
     * @return self
     */
    public function setOpakowanieGuid($opakowanieGuid)
    {
        $this->opakowanieGuid = $opakowanieGuid;

        return $this;
    }

    /**
     * Gets as typ
     *
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets a new typ
     *
     * @param string $typ
     *
     * @return self
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Gets as sygnatura
     *
     * @return string
     */
    public function getSygnatura()
    {
        return $this->sygnatura;
    }

    /**
     * Sets a new sygnatura
     *
     * @param string $sygnatura
     *
     * @return self
     */
    public function setSygnatura($sygnatura)
    {
        $this->sygnatura = $sygnatura;

        return $this;
    }

    /**
     * Gets as ilosc
     *
     * @return int
     */
    public function getIlosc()
    {
        return $this->ilosc;
    }

    /**
     * Sets a new ilosc
     *
     * @param int $ilosc
     *
     * @return self
     */
    public function setIlosc($ilosc)
    {
        $this->ilosc = $ilosc;

        return $this;
    }

    /**
     * Gets as numerOpakowaniaZbiorczego
     *
     * @return string
     */
    public function getNumerOpakowaniaZbiorczego()
    {
        return $this->numerOpakowaniaZbiorczego;
    }

    /**
     * Sets a new numerOpakowaniaZbiorczego
     *
     * @param string $numerOpakowaniaZbiorczego
     *
     * @return self
     */
    public function setNumerOpakowaniaZbiorczego($numerOpakowaniaZbiorczego)
    {
        $this->numerOpakowaniaZbiorczego = $numerOpakowaniaZbiorczego;

        return $this;
    }
}
