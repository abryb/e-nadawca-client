<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing AddOdwolanieDoReklamacji
 */
class AddOdwolanieDoReklamacji
{
    /**
     * @var \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[] $reklamacja
     */
    protected $reklamacja = [
    ];

    /**
     * Adds as reklamacja
     *
     * @param \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType $reklamacja
     *
     * @return self
     */
    public function addToReklamacja(ReklamowanaPrzesylkaType $reklamacja)
    {
        $this->reklamacja[] = $reklamacja;

        return $this;
    }

    /**
     * isset reklamacja
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetReklamacja($index)
    {
        return isset($this->reklamacja[$index]);
    }

    /**
     * unset reklamacja
     *
     * @param int|string $index
     */
    public function unsetReklamacja($index)
    {
        unset($this->reklamacja[$index]);
    }

    /**
     * Gets as reklamacja
     *
     * @return \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[]
     */
    public function getReklamacja()
    {
        return $this->reklamacja;
    }

    /**
     * Sets a new reklamacja
     *
     * @param \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[] $reklamacja
     *
     * @return self
     */
    public function setReklamacja(array $reklamacja)
    {
        $this->reklamacja = $reklamacja;

        return $this;
    }
}
