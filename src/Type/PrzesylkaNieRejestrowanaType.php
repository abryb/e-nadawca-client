<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaNieRejestrowanaType
 *
 * XSD Type: przesylkaNieRejestrowanaType
 */
class PrzesylkaNieRejestrowanaType extends PrzesylkaType
{
    /**
     * @var int $ilosc
     */
    protected $ilosc;

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
}
