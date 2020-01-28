<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetEnvelopeListResponse
 */
class GetEnvelopeListResponse
{
    /**
     * @var \Abryb\ENadawca\Type\EnvelopeInfoType[] $envelopes
     */
    private $envelopes = [
    ];

    /**
     * Adds as envelopes
     *
     * @param \Abryb\ENadawca\Type\EnvelopeInfoType $envelopes
     *
     * @return self
     */
    public function addToEnvelopes(EnvelopeInfoType $envelopes)
    {
        $this->envelopes[] = $envelopes;

        return $this;
    }

    /**
     * isset envelopes
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEnvelopes($index)
    {
        return isset($this->envelopes[$index]);
    }

    /**
     * unset envelopes
     *
     * @param int|string $index
     */
    public function unsetEnvelopes($index)
    {
        unset($this->envelopes[$index]);
    }

    /**
     * Gets as envelopes
     *
     * @return \Abryb\ENadawca\Type\EnvelopeInfoType[]
     */
    public function getEnvelopes()
    {
        return $this->envelopes;
    }

    /**
     * Sets a new envelopes
     *
     * @param \Abryb\ENadawca\Type\EnvelopeInfoType[] $envelopes
     *
     * @return self
     */
    public function setEnvelopes(array $envelopes)
    {
        $this->envelopes = $envelopes;

        return $this;
    }
}
