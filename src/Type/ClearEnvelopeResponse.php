<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ClearEnvelopeResponse
 */
class ClearEnvelopeResponse
{
    /**
     * @var bool $retval
     */
    private $retval;

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    private $error = [
    ];

    /**
     * Gets as retval
     *
     * @return bool
     */
    public function getRetval()
    {
        return $this->retval;
    }

    /**
     * Sets a new retval
     *
     * @param bool $retval
     *
     * @return self
     */
    public function setRetval($retval)
    {
        $this->retval = $retval;

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
