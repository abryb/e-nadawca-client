<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing DownloadIWDContent
 */
class DownloadIWDContent
{
    /**
     * @var int $idEnvelope
     */
    protected $idEnvelope;

    /**
     * Gets as idEnvelope
     *
     * @return int
     */
    public function getIdEnvelope()
    {
        return $this->idEnvelope;
    }

    /**
     * Sets a new idEnvelope
     *
     * @param int $idEnvelope
     *
     * @return self
     */
    public function setIdEnvelope($idEnvelope)
    {
        $this->idEnvelope = $idEnvelope;

        return $this;
    }
}
