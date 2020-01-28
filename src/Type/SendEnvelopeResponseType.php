<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing SendEnvelopeResponseType
 *
 * XSD Type: sendEnvelopeResponseType
 */
class SendEnvelopeResponseType
{
    /**
     * @var int $idEnvelope
     */
    private $idEnvelope;

    /**
     * @var string $envelopeStatus
     */
    private $envelopeStatus;

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    private $error = [
    ];

    /**
     * @var string $envelopeFilename
     */
    private $envelopeFilename;

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

    /**
     * Gets as envelopeFilename
     *
     * @return string
     */
    public function getEnvelopeFilename()
    {
        return $this->envelopeFilename;
    }

    /**
     * Sets a new envelopeFilename
     *
     * @param string $envelopeFilename
     *
     * @return self
     */
    public function setEnvelopeFilename($envelopeFilename)
    {
        $this->envelopeFilename = $envelopeFilename;

        return $this;
    }
}
