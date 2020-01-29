<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing IsMiejscowaResponse
 */
class IsMiejscowaResponse
{
    /**
     * @var \Abryb\ENadawca\Type\TrasaResponseType[] $trasaResponse
     */
    protected $trasaResponse = [
    ];

    /**
     * Adds as trasaResponse
     *
     * @param \Abryb\ENadawca\Type\TrasaResponseType $trasaResponse
     *
     * @return self
     */
    public function addToTrasaResponse(TrasaResponseType $trasaResponse)
    {
        $this->trasaResponse[] = $trasaResponse;

        return $this;
    }

    /**
     * isset trasaResponse
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetTrasaResponse($index)
    {
        return isset($this->trasaResponse[$index]);
    }

    /**
     * unset trasaResponse
     *
     * @param int|string $index
     */
    public function unsetTrasaResponse($index)
    {
        unset($this->trasaResponse[$index]);
    }

    /**
     * Gets as trasaResponse
     *
     * @return \Abryb\ENadawca\Type\TrasaResponseType[]
     */
    public function getTrasaResponse()
    {
        return $this->trasaResponse;
    }

    /**
     * Sets a new trasaResponse
     *
     * @param \Abryb\ENadawca\Type\TrasaResponseType[] $trasaResponse
     *
     * @return self
     */
    public function setTrasaResponse(array $trasaResponse)
    {
        $this->trasaResponse = $trasaResponse;

        return $this;
    }
}
