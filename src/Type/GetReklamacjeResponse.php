<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetReklamacjeResponse
 */
class GetReklamacjeResponse
{
    /**
     * @var \Abryb\ENadawca\Type\ReklamacjaRozpatrzonaType[] $reklamacja
     */
    protected $reklamacja = [
    ];

    /**
     * Adds as reklamacja
     *
     * @param \Abryb\ENadawca\Type\ReklamacjaRozpatrzonaType $reklamacja
     *
     * @return self
     */
    public function addToReklamacja(ReklamacjaRozpatrzonaType $reklamacja)
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
     * @return \Abryb\ENadawca\Type\ReklamacjaRozpatrzonaType[]
     */
    public function getReklamacja()
    {
        return $this->reklamacja;
    }

    /**
     * Sets a new reklamacja
     *
     * @param \Abryb\ENadawca\Type\ReklamacjaRozpatrzonaType[] $reklamacja
     *
     * @return self
     */
    public function setReklamacja(array $reklamacja)
    {
        $this->reklamacja = $reklamacja;

        return $this;
    }
}
