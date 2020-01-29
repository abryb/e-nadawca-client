<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ClearEnvelope
 */
class ClearEnvelope
{
    /**
     * @var int $idBufor
     */
    protected $idBufor;

    /**
     * Gets as idBufor
     *
     * @return int
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Sets a new idBufor
     *
     * @param int $idBufor
     *
     * @return self
     */
    public function setIdBufor($idBufor)
    {
        $this->idBufor = $idBufor;

        return $this;
    }
}
