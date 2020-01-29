<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing EPOInfoType
 *
 * XSD Type: EPOInfoType
 */
class EPOInfoType
{
    /**
     * @var \Abryb\ENadawca\Type\AwizoPrzesylkiType $awizoPrzesylki
     */
    protected $awizoPrzesylki;

    /**
     * @var \Abryb\ENadawca\Type\DoreczeniePrzesylkiType $doreczeniePrzesylki
     */
    protected $doreczeniePrzesylki;

    /**
     * @var \Abryb\ENadawca\Type\ZwrotPrzesylkiType $zwrotPrzesylki
     */
    protected $zwrotPrzesylki;

    /**
     * Gets as awizoPrzesylki
     *
     * @return \Abryb\ENadawca\Type\AwizoPrzesylkiType
     */
    public function getAwizoPrzesylki()
    {
        return $this->awizoPrzesylki;
    }

    /**
     * Sets a new awizoPrzesylki
     *
     * @param \Abryb\ENadawca\Type\AwizoPrzesylkiType $awizoPrzesylki
     *
     * @return self
     */
    public function setAwizoPrzesylki(AwizoPrzesylkiType $awizoPrzesylki)
    {
        $this->awizoPrzesylki = $awizoPrzesylki;

        return $this;
    }

    /**
     * Gets as doreczeniePrzesylki
     *
     * @return \Abryb\ENadawca\Type\DoreczeniePrzesylkiType
     */
    public function getDoreczeniePrzesylki()
    {
        return $this->doreczeniePrzesylki;
    }

    /**
     * Sets a new doreczeniePrzesylki
     *
     * @param \Abryb\ENadawca\Type\DoreczeniePrzesylkiType $doreczeniePrzesylki
     *
     * @return self
     */
    public function setDoreczeniePrzesylki(DoreczeniePrzesylkiType $doreczeniePrzesylki)
    {
        $this->doreczeniePrzesylki = $doreczeniePrzesylki;

        return $this;
    }

    /**
     * Gets as zwrotPrzesylki
     *
     * @return \Abryb\ENadawca\Type\ZwrotPrzesylkiType
     */
    public function getZwrotPrzesylki()
    {
        return $this->zwrotPrzesylki;
    }

    /**
     * Sets a new zwrotPrzesylki
     *
     * @param \Abryb\ENadawca\Type\ZwrotPrzesylkiType $zwrotPrzesylki
     *
     * @return self
     */
    public function setZwrotPrzesylki(ZwrotPrzesylkiType $zwrotPrzesylki)
    {
        $this->zwrotPrzesylki = $zwrotPrzesylki;

        return $this;
    }
}
