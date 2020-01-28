<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetEnvelopeContentShortResponse
 */
class GetEnvelopeContentShortResponse
{
    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaShortType[] $przesylka
     */
    private $przesylka = [
    ];

    /**
     * Adds as przesylka
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaShortType $przesylka
     *
     * @return self
     */
    public function addToPrzesylka(PrzesylkaShortType $przesylka)
    {
        $this->przesylka[] = $przesylka;

        return $this;
    }

    /**
     * isset przesylka
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrzesylka($index)
    {
        return isset($this->przesylka[$index]);
    }

    /**
     * unset przesylka
     *
     * @param int|string $index
     */
    public function unsetPrzesylka($index)
    {
        unset($this->przesylka[$index]);
    }

    /**
     * Gets as przesylka
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaShortType[]
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * Sets a new przesylka
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaShortType[] $przesylka
     *
     * @return self
     */
    public function setPrzesylka(array $przesylka)
    {
        $this->przesylka = $przesylka;

        return $this;
    }
}
