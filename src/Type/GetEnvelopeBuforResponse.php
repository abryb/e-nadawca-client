<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetEnvelopeBuforResponse
 */
class GetEnvelopeBuforResponse
{
    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaType[] $przesylka
     */
    protected $przesylka = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
    ];

    /**
     * Adds as przesylka
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaType $przesylka
     *
     * @return self
     */
    public function addToPrzesylka(PrzesylkaType $przesylka)
    {
        $this->przesylka[] = $przesylka;

        return $this;
    }

    /**
     * isset przesylka
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrzesylka($index)
    {
        return isset($this->przesylka[$index]);
    }

    /**
     * unset przesylka
     *
     * @param int|string $index
     */
    public function unsetPrzesylka($index)
    {
        unset($this->przesylka[$index]);
    }

    /**
     * Gets as przesylka
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaType[]
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * Sets a new przesylka
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaType[] $przesylka
     *
     * @return self
     */
    public function setPrzesylka(array $przesylka)
    {
        $this->przesylka = $przesylka;

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
