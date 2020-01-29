<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing TrasaResponseType
 *
 * XSD Type: trasaResponseType
 */
class TrasaResponseType
{
    /**
     * @var bool $isMiejscowa
     */
    protected $isMiejscowa;

    /**
     * @var string $guid
     */
    protected $guid;

    /**
     * Gets as isMiejscowa
     *
     * @return bool
     */
    public function getIsMiejscowa()
    {
        return $this->isMiejscowa;
    }

    /**
     * Sets a new isMiejscowa
     *
     * @param bool $isMiejscowa
     *
     * @return self
     */
    public function setIsMiejscowa($isMiejscowa)
    {
        $this->isMiejscowa = $isMiejscowa;

        return $this;
    }

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
}
