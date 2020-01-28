<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetEZDO
 */
class GetEZDO
{
    /**
     * @var int $idEZDOPakiet
     */
    private $idEZDOPakiet;

    /**
     * Gets as idEZDOPakiet
     *
     * @return int
     */
    public function getIdEZDOPakiet()
    {
        return $this->idEZDOPakiet;
    }

    /**
     * Sets a new idEZDOPakiet
     *
     * @param int $idEZDOPakiet
     *
     * @return self
     */
    public function setIdEZDOPakiet($idEZDOPakiet)
    {
        $this->idEZDOPakiet = $idEZDOPakiet;

        return $this;
    }
}
