<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing IsMiejscowa
 */
class IsMiejscowa
{
    /**
     * @var \Abryb\ENadawca\Type\TrasaRequestType[] $trasaRequest
     */
    private $trasaRequest = [
    ];

    /**
     * Adds as trasaRequest
     *
     * @param \Abryb\ENadawca\Type\TrasaRequestType $trasaRequest
     *
     * @return self
     */
    public function addToTrasaRequest(TrasaRequestType $trasaRequest)
    {
        $this->trasaRequest[] = $trasaRequest;

        return $this;
    }

    /**
     * isset trasaRequest
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetTrasaRequest($index)
    {
        return isset($this->trasaRequest[$index]);
    }

    /**
     * unset trasaRequest
     *
     * @param int|string $index
     */
    public function unsetTrasaRequest($index)
    {
        unset($this->trasaRequest[$index]);
    }

    /**
     * Gets as trasaRequest
     *
     * @return \Abryb\ENadawca\Type\TrasaRequestType[]
     */
    public function getTrasaRequest()
    {
        return $this->trasaRequest;
    }

    /**
     * Sets a new trasaRequest
     *
     * @param \Abryb\ENadawca\Type\TrasaRequestType[] $trasaRequest
     *
     * @return self
     */
    public function setTrasaRequest(array $trasaRequest)
    {
        $this->trasaRequest = $trasaRequest;

        return $this;
    }
}
