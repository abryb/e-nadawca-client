<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing SetAktywnaKarta
 */
class SetAktywnaKarta
{
    /**
     * @var int $idKarta
     */
    protected $idKarta;

    /**
     * Gets as idKarta
     *
     * @return int
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Sets a new idKarta
     *
     * @param int $idKarta
     *
     * @return self
     */
    public function setIdKarta($idKarta)
    {
        $this->idKarta = $idKarta;

        return $this;
    }
}
