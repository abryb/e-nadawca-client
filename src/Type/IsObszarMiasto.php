<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing IsObszarMiasto
 */
class IsObszarMiasto
{
    /**
     * @var \Abryb\ENadawca\Type\ObszarAdresowyType[] $adres
     */
    private $adres = [
    ];

    /**
     * Adds as adres
     *
     * @param \Abryb\ENadawca\Type\ObszarAdresowyType $adres
     *
     * @return self
     */
    public function addToAdres(ObszarAdresowyType $adres)
    {
        $this->adres[] = $adres;

        return $this;
    }

    /**
     * isset adres
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAdres($index)
    {
        return isset($this->adres[$index]);
    }

    /**
     * unset adres
     *
     * @param int|string $index
     */
    public function unsetAdres($index)
    {
        unset($this->adres[$index]);
    }

    /**
     * Gets as adres
     *
     * @return \Abryb\ENadawca\Type\ObszarAdresowyType[]
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \Abryb\ENadawca\Type\ObszarAdresowyType[] $adres
     *
     * @return self
     */
    public function setAdres(array $adres)
    {
        $this->adres = $adres;

        return $this;
    }
}
