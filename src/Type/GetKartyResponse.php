<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetKartyResponse
 */
class GetKartyResponse
{
    /**
     * @var \Abryb\ENadawca\Type\KartaType[] $karta
     */
    private $karta = [
    ];

    /**
     * Adds as karta
     *
     * @param \Abryb\ENadawca\Type\KartaType $karta
     *
     * @return self
     */
    public function addToKarta(KartaType $karta)
    {
        $this->karta[] = $karta;

        return $this;
    }

    /**
     * isset karta
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetKarta($index)
    {
        return isset($this->karta[$index]);
    }

    /**
     * unset karta
     *
     * @param int|string $index
     */
    public function unsetKarta($index)
    {
        unset($this->karta[$index]);
    }

    /**
     * Gets as karta
     *
     * @return \Abryb\ENadawca\Type\KartaType[]
     */
    public function getKarta()
    {
        return $this->karta;
    }

    /**
     * Sets a new karta
     *
     * @param \Abryb\ENadawca\Type\KartaType[] $karta
     *
     * @return self
     */
    public function setKarta(array $karta)
    {
        $this->karta = $karta;

        return $this;
    }
}
