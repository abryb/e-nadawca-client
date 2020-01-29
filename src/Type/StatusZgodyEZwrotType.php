<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing StatusZgodyEZwrotType
 *
 * XSD Type: statusZgodyEZwrotType
 */
class StatusZgodyEZwrotType
{
    /**
     * @var string $guidZgodaEZwrot
     */
    protected $guidZgodaEZwrot;

    /**
     * @var string $status
     */
    protected $status;

    /**
     * @var bool $platnoscZaPrzesylke
     */
    protected $platnoscZaPrzesylke;

    /**
     * Kwota w groszach
     *
     * @var int $kosztKontrahenta
     */
    protected $kosztKontrahenta;

    /**
     * @var \DateTime $dataWygasnieciaZgody
     */
    protected $dataWygasnieciaZgody;

    /**
     * @var string[] $eZwrotPrzesylki
     */
    protected $eZwrotPrzesylki = [
    ];

    /**
     * Gets as guidZgodaEZwrot
     *
     * @return string
     */
    public function getGuidZgodaEZwrot()
    {
        return $this->guidZgodaEZwrot;
    }

    /**
     * Sets a new guidZgodaEZwrot
     *
     * @param string $guidZgodaEZwrot
     *
     * @return self
     */
    public function setGuidZgodaEZwrot($guidZgodaEZwrot)
    {
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;

        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as platnoscZaPrzesylke
     *
     * @return bool
     */
    public function getPlatnoscZaPrzesylke()
    {
        return $this->platnoscZaPrzesylke;
    }

    /**
     * Sets a new platnoscZaPrzesylke
     *
     * @param bool $platnoscZaPrzesylke
     *
     * @return self
     */
    public function setPlatnoscZaPrzesylke($platnoscZaPrzesylke)
    {
        $this->platnoscZaPrzesylke = $platnoscZaPrzesylke;

        return $this;
    }

    /**
     * Gets as kosztKontrahenta
     *
     * Kwota w groszach
     *
     * @return int
     */
    public function getKosztKontrahenta()
    {
        return $this->kosztKontrahenta;
    }

    /**
     * Sets a new kosztKontrahenta
     *
     * Kwota w groszach
     *
     * @param int $kosztKontrahenta
     *
     * @return self
     */
    public function setKosztKontrahenta($kosztKontrahenta)
    {
        $this->kosztKontrahenta = $kosztKontrahenta;

        return $this;
    }

    /**
     * Gets as dataWygasnieciaZgody
     *
     * @return \DateTime
     */
    public function getDataWygasnieciaZgody()
    {
        return $this->dataWygasnieciaZgody;
    }

    /**
     * Sets a new dataWygasnieciaZgody
     *
     * @return self
     */
    public function setDataWygasnieciaZgody(\DateTime $dataWygasnieciaZgody)
    {
        $this->dataWygasnieciaZgody = $dataWygasnieciaZgody;

        return $this;
    }

    /**
     * Adds as eZwrotPrzesylki
     *
     * @param string $eZwrotPrzesylki
     *
     * @return self
     */
    public function addToEZwrotPrzesylki($eZwrotPrzesylki)
    {
        $this->eZwrotPrzesylki[] = $eZwrotPrzesylki;

        return $this;
    }

    /**
     * isset eZwrotPrzesylki
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEZwrotPrzesylki($index)
    {
        return isset($this->eZwrotPrzesylki[$index]);
    }

    /**
     * unset eZwrotPrzesylki
     *
     * @param int|string $index
     */
    public function unsetEZwrotPrzesylki($index)
    {
        unset($this->eZwrotPrzesylki[$index]);
    }

    /**
     * Gets as eZwrotPrzesylki
     *
     * @return string[]
     */
    public function getEZwrotPrzesylki()
    {
        return $this->eZwrotPrzesylki;
    }

    /**
     * Sets a new eZwrotPrzesylki
     *
     * @param string $eZwrotPrzesylki
     *
     * @return self
     */
    public function setEZwrotPrzesylki(array $eZwrotPrzesylki)
    {
        $this->eZwrotPrzesylki = $eZwrotPrzesylki;

        return $this;
    }
}
