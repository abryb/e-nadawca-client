<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrintResultType
 *
 * XSD Type: PrintResultType
 */
class PrintResultType
{
    /**
     * @var string $guid
     */
    protected $guid;

    /**
     * @var mixed $print
     */
    protected $print;

    /**
     * Gets as guid
     *
     * @return string
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
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Gets as print
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * Sets a new print
     *
     * @return self
     */
    public function setPrint($print)
    {
        $this->print = $print;

        return $this;
    }
}
