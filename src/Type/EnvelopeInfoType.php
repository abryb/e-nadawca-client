<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing EnvelopeInfoType
 *
 * XSD Type: envelopeInfoType
 */
class EnvelopeInfoType
{
    /**
     * @var int $idEnvelope
     */
    protected $idEnvelope;

    /**
     * @var string $envelopeStatus
     */
    protected $envelopeStatus;

    /**
     * @var \DateTime $dataTransmisji
     */
    protected $dataTransmisji;

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
    ];

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

    /**
     * Gets as envelopeStatus
     *
     * @return string
     */
    public function getEnvelopeStatus()
    {
        return $this->envelopeStatus;
    }

    /**
     * Sets a new envelopeStatus
     *
     * @param string $envelopeStatus
     *
     * @return self
     */
    public function setEnvelopeStatus($envelopeStatus)
    {
        $this->envelopeStatus = $envelopeStatus;

        return $this;
    }

    /**
     * Gets as dataTransmisji
     *
     * @return \DateTime
     */
    public function getDataTransmisji()
    {
        return $this->dataTransmisji;
    }

    /**
     * Sets a new dataTransmisji
     *
     * @return self
     */
    public function setDataTransmisji(\DateTime $dataTransmisji)
    {
        $this->dataTransmisji = $dataTransmisji;

        return $this;
    }

    /**
     * Adds as error
     *
     * @param \Abryb\ENadawca\Type\ErrorType $error
     *
     * @return self
     */
    public function addToError(ErrorType $error)
    {
        $this->error[] = $error;

        return $this;
    }

    /**
     * isset error
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param int|string $index
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return \Abryb\ENadawca\Type\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \Abryb\ENadawca\Type\ErrorType[] $error
     *
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;

        return $this;
    }
}
