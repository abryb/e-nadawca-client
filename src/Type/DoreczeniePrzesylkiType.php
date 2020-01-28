<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing DoreczeniePrzesylkiType
 *
 * XSD Type: doreczeniePrzesylkiType
 */
class DoreczeniePrzesylkiType
{
    /**
     * @var \DateTime $data
     */
    private $data;

    /**
     * @var string $osobaOdbierajaca
     */
    private $osobaOdbierajaca;

    /**
     * @var string $podmiotDoreczenia
     */
    private $podmiotDoreczenia;

    /**
     * @var \DateTime $dataPelnomocnictwa
     */
    private $dataPelnomocnictwa;

    /**
     * @var string $numerPelnomocnictwa
     */
    private $numerPelnomocnictwa;

    /**
     * @var bool $pieczecFirmowa
     */
    private $pieczecFirmowa;

    /**
     * @var string $miejscePozostawieniaZawiadomieniaODoreczeniu
     */
    private $miejscePozostawieniaZawiadomieniaODoreczeniu;

    /**
     * Gets as data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @return self
     */
    public function setData(\DateTime $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Gets as osobaOdbierajaca
     *
     * @return string
     */
    public function getOsobaOdbierajaca()
    {
        return $this->osobaOdbierajaca;
    }

    /**
     * Sets a new osobaOdbierajaca
     *
     * @param string $osobaOdbierajaca
     *
     * @return self
     */
    public function setOsobaOdbierajaca($osobaOdbierajaca)
    {
        $this->osobaOdbierajaca = $osobaOdbierajaca;

        return $this;
    }

    /**
     * Gets as podmiotDoreczenia
     *
     * @return string
     */
    public function getPodmiotDoreczenia()
    {
        return $this->podmiotDoreczenia;
    }

    /**
     * Sets a new podmiotDoreczenia
     *
     * @param string $podmiotDoreczenia
     *
     * @return self
     */
    public function setPodmiotDoreczenia($podmiotDoreczenia)
    {
        $this->podmiotDoreczenia = $podmiotDoreczenia;

        return $this;
    }

    /**
     * Gets as dataPelnomocnictwa
     *
     * @return \DateTime
     */
    public function getDataPelnomocnictwa()
    {
        return $this->dataPelnomocnictwa;
    }

    /**
     * Sets a new dataPelnomocnictwa
     *
     * @return self
     */
    public function setDataPelnomocnictwa(\DateTime $dataPelnomocnictwa)
    {
        $this->dataPelnomocnictwa = $dataPelnomocnictwa;

        return $this;
    }

    /**
     * Gets as numerPelnomocnictwa
     *
     * @return string
     */
    public function getNumerPelnomocnictwa()
    {
        return $this->numerPelnomocnictwa;
    }

    /**
     * Sets a new numerPelnomocnictwa
     *
     * @param string $numerPelnomocnictwa
     *
     * @return self
     */
    public function setNumerPelnomocnictwa($numerPelnomocnictwa)
    {
        $this->numerPelnomocnictwa = $numerPelnomocnictwa;

        return $this;
    }

    /**
     * Gets as pieczecFirmowa
     *
     * @return bool
     */
    public function getPieczecFirmowa()
    {
        return $this->pieczecFirmowa;
    }

    /**
     * Sets a new pieczecFirmowa
     *
     * @param bool $pieczecFirmowa
     *
     * @return self
     */
    public function setPieczecFirmowa($pieczecFirmowa)
    {
        $this->pieczecFirmowa = $pieczecFirmowa;

        return $this;
    }

    /**
     * Gets as miejscePozostawieniaZawiadomieniaODoreczeniu
     *
     * @return string
     */
    public function getMiejscePozostawieniaZawiadomieniaODoreczeniu()
    {
        return $this->miejscePozostawieniaZawiadomieniaODoreczeniu;
    }

    /**
     * Sets a new miejscePozostawieniaZawiadomieniaODoreczeniu
     *
     * @param string $miejscePozostawieniaZawiadomieniaODoreczeniu
     *
     * @return self
     */
    public function setMiejscePozostawieniaZawiadomieniaODoreczeniu($miejscePozostawieniaZawiadomieniaODoreczeniu)
    {
        $this->miejscePozostawieniaZawiadomieniaODoreczeniu = $miejscePozostawieniaZawiadomieniaODoreczeniu;

        return $this;
    }
}
