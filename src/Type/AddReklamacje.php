<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing AddReklamacje
 */
class AddReklamacje
{
    /**
     * @var \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[] $reklamowanaPrzesylka
     */
    private $reklamowanaPrzesylka = [
    ];

    /**
     * Adds as reklamowanaPrzesylka
     *
     * @param \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType $reklamowanaPrzesylka
     *
     * @return self
     */
    public function addToReklamowanaPrzesylka(ReklamowanaPrzesylkaType $reklamowanaPrzesylka)
    {
        $this->reklamowanaPrzesylka[] = $reklamowanaPrzesylka;

        return $this;
    }

    /**
     * isset reklamowanaPrzesylka
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetReklamowanaPrzesylka($index)
    {
        return isset($this->reklamowanaPrzesylka[$index]);
    }

    /**
     * unset reklamowanaPrzesylka
     *
     * @param int|string $index
     */
    public function unsetReklamowanaPrzesylka($index)
    {
        unset($this->reklamowanaPrzesylka[$index]);
    }

    /**
     * Gets as reklamowanaPrzesylka
     *
     * @return \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[]
     */
    public function getReklamowanaPrzesylka()
    {
        return $this->reklamowanaPrzesylka;
    }

    /**
     * Sets a new reklamowanaPrzesylka
     *
     * @param \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[] $reklamowanaPrzesylka
     *
     * @return self
     */
    public function setReklamowanaPrzesylka(array $reklamowanaPrzesylka)
    {
        $this->reklamowanaPrzesylka = $reklamowanaPrzesylka;

        return $this;
    }
}
