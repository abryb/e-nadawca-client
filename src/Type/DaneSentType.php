<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing DaneSentType
 *
 * XSD Type: daneSentType
 */
class DaneSentType
{
    /**
     * @var string $numer
     */
    protected $numer;

    /**
     * @var string $kluczPrzewoznika
     */
    protected $kluczPrzewoznika;

    /**
     * @var string $kodCN
     */
    protected $kodCN;

    /**
     * @var string $kodPKWiU
     */
    protected $kodPKWiU;

    /**
     * @var float $masa
     */
    protected $masa;

    /**
     * @var bool $proceduraAwaryjna
     */
    protected $proceduraAwaryjna;

    /**
     * Gets as numer
     *
     * @return string
     */
    public function getNumer()
    {
        return $this->numer;
    }

    /**
     * Sets a new numer
     *
     * @param string $numer
     *
     * @return self
     */
    public function setNumer($numer)
    {
        $this->numer = $numer;

        return $this;
    }

    /**
     * Gets as kluczPrzewoznika
     *
     * @return string
     */
    public function getKluczPrzewoznika()
    {
        return $this->kluczPrzewoznika;
    }

    /**
     * Sets a new kluczPrzewoznika
     *
     * @param string $kluczPrzewoznika
     *
     * @return self
     */
    public function setKluczPrzewoznika($kluczPrzewoznika)
    {
        $this->kluczPrzewoznika = $kluczPrzewoznika;

        return $this;
    }

    /**
     * Gets as kodCN
     *
     * @return string
     */
    public function getKodCN()
    {
        return $this->kodCN;
    }

    /**
     * Sets a new kodCN
     *
     * @param string $kodCN
     *
     * @return self
     */
    public function setKodCN($kodCN)
    {
        $this->kodCN = $kodCN;

        return $this;
    }

    /**
     * Gets as kodPKWiU
     *
     * @return string
     */
    public function getKodPKWiU()
    {
        return $this->kodPKWiU;
    }

    /**
     * Sets a new kodPKWiU
     *
     * @param string $kodPKWiU
     *
     * @return self
     */
    public function setKodPKWiU($kodPKWiU)
    {
        $this->kodPKWiU = $kodPKWiU;

        return $this;
    }

    /**
     * Gets as masa
     *
     * @return float
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Sets a new masa
     *
     * @param float $masa
     *
     * @return self
     */
    public function setMasa($masa)
    {
        $this->masa = $masa;

        return $this;
    }

    /**
     * Gets as proceduraAwaryjna
     *
     * @return bool
     */
    public function getProceduraAwaryjna()
    {
        return $this->proceduraAwaryjna;
    }

    /**
     * Sets a new proceduraAwaryjna
     *
     * @param bool $proceduraAwaryjna
     *
     * @return self
     */
    public function setProceduraAwaryjna($proceduraAwaryjna)
    {
        $this->proceduraAwaryjna = $proceduraAwaryjna;

        return $this;
    }
}
