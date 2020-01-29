<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetPrintForParcel
 */
class GetPrintForParcel
{
    /**
     * parcels guids
     *
     * @var string[] $guid
     */
    protected $guid = [
    ];

    /**
     * printout type
     *
     * @var \Abryb\ENadawca\Type\PrintType $type
     */
    protected $type;

    /**
     * Adds as guid
     *
     * parcels guids
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
     * parcels guids
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
     * parcels guids
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
     * parcels guids
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
     * parcels guids
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
     * Gets as type
     *
     * printout type
     *
     * @return \Abryb\ENadawca\Type\PrintType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * printout type
     *
     * @param \Abryb\ENadawca\Type\PrintType $type
     *
     * @return self
     */
    public function setType(PrintType $type)
    {
        $this->type = $type;

        return $this;
    }
}
