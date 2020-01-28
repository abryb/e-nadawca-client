<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing SubPrzesylkaBiznesowaType
 *
 * XSD Type: subPrzesylkaBiznesowaType
 */
class SubPrzesylkaBiznesowaType extends PrzesylkaType
{
    /**
     * @var string $numerNadania
     */
    private $numerNadania;

    /**
     * @var int $masa
     */
    private $masa;

    /**
     * @var string $gabaryt
     */
    private $gabaryt;

    /**
     * @var int $wartosc
     */
    private $wartosc;

    /**
     * @var bool $ostroznie
     */
    private $ostroznie;

    /**
     * @var \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     */
    private $ubezpieczenie;

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
     * Gets as masa
     *
     * @return int
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Sets a new masa
     *
     * @param int $masa
     *
     * @return self
     */
    public function setMasa($masa)
    {
        $this->masa = $masa;

        return $this;
    }

    /**
     * Gets as gabaryt
     *
     * @return string
     */
    public function getGabaryt()
    {
        return $this->gabaryt;
    }

    /**
     * Sets a new gabaryt
     *
     * @param string $gabaryt
     *
     * @return self
     */
    public function setGabaryt($gabaryt)
    {
        $this->gabaryt = $gabaryt;

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
     * Gets as ostroznie
     *
     * @return bool
     */
    public function getOstroznie()
    {
        return $this->ostroznie;
    }

    /**
     * Sets a new ostroznie
     *
     * @param bool $ostroznie
     *
     * @return self
     */
    public function setOstroznie($ostroznie)
    {
        $this->ostroznie = $ostroznie;

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
