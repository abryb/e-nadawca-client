<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing CancelReklamacja
 */
class CancelReklamacja
{
    /**
     * @var int $idRelkamacja
     */
    protected $idRelkamacja;

    /**
     * Gets as idRelkamacja
     *
     * @return int
     */
    public function getIdRelkamacja()
    {
        return $this->idRelkamacja;
    }

    /**
     * Sets a new idRelkamacja
     *
     * @param int $idRelkamacja
     *
     * @return self
     */
    public function setIdRelkamacja($idRelkamacja)
    {
        $this->idRelkamacja = $idRelkamacja;

        return $this;
    }
}
