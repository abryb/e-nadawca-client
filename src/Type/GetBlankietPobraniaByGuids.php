<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetBlankietPobraniaByGuids
 */
class GetBlankietPobraniaByGuids
{
    /**
     * @var string[] $guid
     */
    protected $guid = [
    ];

    /**
     * @var int $idBufor
     */
    protected $idBufor;

    /**
     * Adds as guid
     *
     * @param string $guid
     *
     * @return self
     */
    public function addToGuid($guid)
    {
        $this->guid[] = $guid;

        return $this;
    }

    /**
     * isset guid
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGuid($index)
    {
        return isset($this->guid[$index]);
    }

    /**
     * unset guid
     *
     * @param int|string $index
     */
    public function unsetGuid($index)
    {
        unset($this->guid[$index]);
    }

    /**
     * Gets as guid
     *
     * @return string[]
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * @param string $guid
     *
     * @return self
     */
    public function setGuid(array $guid)
    {
        $this->guid = $guid;

        return $this;
    }

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
