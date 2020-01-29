<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetEPOStatusResponse
 */
class GetEPOStatusResponse
{
    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaEPOType[] $epo
     */
    protected $epo = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
    ];

    /**
     * Adds as epo
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaEPOType $epo
     *
     * @return self
     */
    public function addToEpo(PrzesylkaEPOType $epo)
    {
        $this->epo[] = $epo;

        return $this;
    }

    /**
     * isset epo
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEpo($index)
    {
        return isset($this->epo[$index]);
    }

    /**
     * unset epo
     *
     * @param int|string $index
     */
    public function unsetEpo($index)
    {
        unset($this->epo[$index]);
    }

    /**
     * Gets as epo
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaEPOType[]
     */
    public function getEpo()
    {
        return $this->epo;
    }

    /**
     * Sets a new epo
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaEPOType[] $epo
     *
     * @return self
     */
    public function setEpo(array $epo)
    {
        $this->epo = $epo;

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
