<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaType
 *
 * XSD Type: przesylkaType
 */
class PrzesylkaType
{
    /**
     * @var string $guid
     */
    protected $guid;

    /**
     * @var string $pakietGuid
     */
    protected $pakietGuid;

    /**
     * @var string $opakowanieGuid
     */
    protected $opakowanieGuid;

    /**
     * @var string $opis
     */
    protected $opis;

    /**
     * @var \DateTime $planowanaDataNadania
     */
    protected $planowanaDataNadania;

    /**
     * @var \Abryb\ENadawca\Type\OplacaOdbiorcaType $oplacaOdbiorca
     */
    protected $oplacaOdbiorca;

    /**
     * Gets as guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * @param string $guid
     *
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Gets as pakietGuid
     *
     * @return string
     */
    public function getPakietGuid()
    {
        return $this->pakietGuid;
    }

    /**
     * Sets a new pakietGuid
     *
     * @param string $pakietGuid
     *
     * @return self
     */
    public function setPakietGuid($pakietGuid)
    {
        $this->pakietGuid = $pakietGuid;

        return $this;
    }

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
     * Gets as planowanaDataNadania
     *
     * @return \DateTime
     */
    public function getPlanowanaDataNadania()
    {
        return $this->planowanaDataNadania;
    }

    /**
     * Sets a new planowanaDataNadania
     *
     * @return self
     */
    public function setPlanowanaDataNadania(\DateTime $planowanaDataNadania)
    {
        $this->planowanaDataNadania = $planowanaDataNadania;

        return $this;
    }

    /**
     * Gets as oplacaOdbiorca
     *
     * @return \Abryb\ENadawca\Type\OplacaOdbiorcaType
     */
    public function getOplacaOdbiorca()
    {
        return $this->oplacaOdbiorca;
    }

    /**
     * Sets a new oplacaOdbiorca
     *
     * @param \Abryb\ENadawca\Type\OplacaOdbiorcaType $oplacaOdbiorca
     *
     * @return self
     */
    public function setOplacaOdbiorca(OplacaOdbiorcaType $oplacaOdbiorca)
    {
        $this->oplacaOdbiorca = $oplacaOdbiorca;

        return $this;
    }
}
