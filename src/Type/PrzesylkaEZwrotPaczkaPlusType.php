<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaEZwrotPaczkaPlusType
 *
 * XSD Type: przesylkaEZwrotPaczkaPlusType
 */
class PrzesylkaEZwrotPaczkaPlusType extends PrzesylkaRejestrowanaType
{
    /**
     * @var string $numerNadaniaZwrot
     */
    protected $numerNadaniaZwrot;

    /**
     * @var int $idSklepEZwrot
     */
    protected $idSklepEZwrot;

    /**
     * @var int $wartosc
     */
    protected $wartosc;

    /**
     * @var \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie;

    /**
     * Gets as numerNadaniaZwrot
     *
     * @return string
     */
    public function getNumerNadaniaZwrot()
    {
        return $this->numerNadaniaZwrot;
    }

    /**
     * Sets a new numerNadaniaZwrot
     *
     * @param string $numerNadaniaZwrot
     *
     * @return self
     */
    public function setNumerNadaniaZwrot($numerNadaniaZwrot)
    {
        $this->numerNadaniaZwrot = $numerNadaniaZwrot;

        return $this;
    }

    /**
     * Gets as idSklepEZwrot
     *
     * @return int
     */
    public function getIdSklepEZwrot()
    {
        return $this->idSklepEZwrot;
    }

    /**
     * Sets a new idSklepEZwrot
     *
     * @param int $idSklepEZwrot
     *
     * @return self
     */
    public function setIdSklepEZwrot($idSklepEZwrot)
    {
        $this->idSklepEZwrot = $idSklepEZwrot;

        return $this;
    }

    /**
     * Gets as wartosc
     *
     * @return int
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Sets a new wartosc
     *
     * @param int $wartosc
     *
     * @return self
     */
    public function setWartosc($wartosc)
    {
        $this->wartosc = $wartosc;

        return $this;
    }

    /**
     * Gets as ubezpieczenie
     *
     * @return \Abryb\ENadawca\Type\UbezpieczenieType
     */
    public function getUbezpieczenie()
    {
        return $this->ubezpieczenie;
    }

    /**
     * Sets a new ubezpieczenie
     *
     * @param \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     *
     * @return self
     */
    public function setUbezpieczenie(UbezpieczenieType $ubezpieczenie)
    {
        $this->ubezpieczenie = $ubezpieczenie;

        return $this;
    }
}
