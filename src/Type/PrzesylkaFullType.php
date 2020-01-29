<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaFullType
 *
 * XSD Type: przesylkaFullType
 */
class PrzesylkaFullType
{
    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaShortType $przesylkaShort
     */
    protected $przesylkaShort;

    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaType $przesylkaFull
     */
    protected $przesylkaFull;

    /**
     * Gets as przesylkaShort
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaShortType
     */
    public function getPrzesylkaShort()
    {
        return $this->przesylkaShort;
    }

    /**
     * Sets a new przesylkaShort
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaShortType $przesylkaShort
     *
     * @return self
     */
    public function setPrzesylkaShort(PrzesylkaShortType $przesylkaShort)
    {
        $this->przesylkaShort = $przesylkaShort;

        return $this;
    }

    /**
     * Gets as przesylkaFull
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaType
     */
    public function getPrzesylkaFull()
    {
        return $this->przesylkaFull;
    }

    /**
     * Sets a new przesylkaFull
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaType $przesylkaFull
     *
     * @return self
     */
    public function setPrzesylkaFull(PrzesylkaType $przesylkaFull)
    {
        $this->przesylkaFull = $przesylkaFull;

        return $this;
    }
}
