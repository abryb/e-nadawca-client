<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing TrasaRequestType
 *
 * XSD Type: trasaRequestType
 */
class TrasaRequestType
{
    /**
     * @var int $fromUrzadNadania
     */
    private $fromUrzadNadania;

    /**
     * @var string $toKodPocztowy
     */
    private $toKodPocztowy;

    /**
     * @var string $guid
     */
    private $guid;

    /**
     * Gets as fromUrzadNadania
     *
     * @return int
     */
    public function getFromUrzadNadania()
    {
        return $this->fromUrzadNadania;
    }

    /**
     * Sets a new fromUrzadNadania
     *
     * @param int $fromUrzadNadania
     *
     * @return self
     */
    public function setFromUrzadNadania($fromUrzadNadania)
    {
        $this->fromUrzadNadania = $fromUrzadNadania;

        return $this;
    }

    /**
     * Gets as toKodPocztowy
     *
     * @return string
     */
    public function getToKodPocztowy()
    {
        return $this->toKodPocztowy;
    }

    /**
     * Sets a new toKodPocztowy
     *
     * @param string $toKodPocztowy
     *
     * @return self
     */
    public function setToKodPocztowy($toKodPocztowy)
    {
        $this->toKodPocztowy = $toKodPocztowy;

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
