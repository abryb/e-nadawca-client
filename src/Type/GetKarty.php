<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetKarty
 */
class GetKarty
{
    /**
     * @var int[] $idKarta
     */
    protected $idKarta = [
    ];

    /**
     * Adds as idKarta
     *
     * @param int $idKarta
     *
     * @return self
     */
    public function addToIdKarta($idKarta)
    {
        $this->idKarta[] = $idKarta;

        return $this;
    }

    /**
     * isset idKarta
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIdKarta($index)
    {
        return isset($this->idKarta[$index]);
    }

    /**
     * unset idKarta
     *
     * @param int|string $index
     */
    public function unsetIdKarta($index)
    {
        unset($this->idKarta[$index]);
    }

    /**
     * Gets as idKarta
     *
     * @return int[]
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Sets a new idKarta
     *
     * @param int[] $idKarta
     *
     * @return self
     */
    public function setIdKarta(array $idKarta)
    {
        $this->idKarta = $idKarta;

        return $this;
    }
}
