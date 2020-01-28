<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing EMSType
 *
 * XSD Type: EMSType
 */
class EMSType extends PrzesylkaRejestrowanaType
{
    /**
     * @var string $typOpakowania
     */
    private $typOpakowania;

    /**
     * @var int $masa
     */
    private $masa;

    /**
     * @var bool $zalaczoneDokumenty
     */
    private $zalaczoneDokumenty;

    /**
     * @var \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     */
    private $ubezpieczenie;

    /**
     * Deklaracja celna - "deprecated" - zalecane jest ustawianie elementu deklaracjaCelna2
     *
     * @var \Abryb\ENadawca\Type\DeklaracjaCelnaType $deklaracjaCelna
     */
    private $deklaracjaCelna;

    /**
     * @var \Abryb\ENadawca\Type\DeklaracjaCelna2Type $deklaracjaCelna2
     */
    private $deklaracjaCelna2;

    /**
     * Gets as typOpakowania
     *
     * @return string
     */
    public function getTypOpakowania()
    {
        return $this->typOpakowania;
    }

    /**
     * Sets a new typOpakowania
     *
     * @param string $typOpakowania
     *
     * @return self
     */
    public function setTypOpakowania($typOpakowania)
    {
        $this->typOpakowania = $typOpakowania;

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
     * Gets as zalaczoneDokumenty
     *
     * @return bool
     */
    public function getZalaczoneDokumenty()
    {
        return $this->zalaczoneDokumenty;
    }

    /**
     * Sets a new zalaczoneDokumenty
     *
     * @param bool $zalaczoneDokumenty
     *
     * @return self
     */
    public function setZalaczoneDokumenty($zalaczoneDokumenty)
    {
        $this->zalaczoneDokumenty = $zalaczoneDokumenty;

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

    /**
     * Gets as deklaracjaCelna
     *
     * Deklaracja celna - "deprecated" - zalecane jest ustawianie elementu deklaracjaCelna2
     *
     * @return \Abryb\ENadawca\Type\DeklaracjaCelnaType
     */
    public function getDeklaracjaCelna()
    {
        return $this->deklaracjaCelna;
    }

    /**
     * Sets a new deklaracjaCelna
     *
     * Deklaracja celna - "deprecated" - zalecane jest ustawianie elementu deklaracjaCelna2
     *
     * @param \Abryb\ENadawca\Type\DeklaracjaCelnaType $deklaracjaCelna
     *
     * @return self
     */
    public function setDeklaracjaCelna(DeklaracjaCelnaType $deklaracjaCelna)
    {
        $this->deklaracjaCelna = $deklaracjaCelna;

        return $this;
    }

    /**
     * Gets as deklaracjaCelna2
     *
     * @return \Abryb\ENadawca\Type\DeklaracjaCelna2Type
     */
    public function getDeklaracjaCelna2()
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * Sets a new deklaracjaCelna2
     *
     * @param \Abryb\ENadawca\Type\DeklaracjaCelna2Type $deklaracjaCelna2
     *
     * @return self
     */
    public function setDeklaracjaCelna2(DeklaracjaCelna2Type $deklaracjaCelna2)
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;

        return $this;
    }
}
