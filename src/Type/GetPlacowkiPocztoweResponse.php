<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetPlacowkiPocztoweResponse
 */
class GetPlacowkiPocztoweResponse
{
    /**
     * @var \Abryb\ENadawca\Type\PlacowkaPocztowaType[] $placowka
     */
    protected $placowka = [
    ];

    /**
     * Adds as placowka
     *
     * @param \Abryb\ENadawca\Type\PlacowkaPocztowaType $placowka
     *
     * @return self
     */
    public function addToPlacowka(PlacowkaPocztowaType $placowka)
    {
        $this->placowka[] = $placowka;

        return $this;
    }

    /**
     * isset placowka
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPlacowka($index)
    {
        return isset($this->placowka[$index]);
    }

    /**
     * unset placowka
     *
     * @param int|string $index
     */
    public function unsetPlacowka($index)
    {
        unset($this->placowka[$index]);
    }

    /**
     * Gets as placowka
     *
     * @return \Abryb\ENadawca\Type\PlacowkaPocztowaType[]
     */
    public function getPlacowka()
    {
        return $this->placowka;
    }

    /**
     * Sets a new placowka
     *
     * @param \Abryb\ENadawca\Type\PlacowkaPocztowaType[] $placowka
     *
     * @return self
     */
    public function setPlacowka(array $placowka)
    {
        $this->placowka = $placowka;

        return $this;
    }
}
