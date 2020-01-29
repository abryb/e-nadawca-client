<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ReklamowaType
 *
 * XSD Type: reklamowaType
 */
class ReklamowaType extends PrzesylkaNieRejestrowanaType
{
    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var string $gabaryt
     */
    protected $gabaryt;

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
}
