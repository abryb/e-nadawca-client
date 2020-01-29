<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetEZDOResponse
 */
class GetEZDOResponse
{
    /**
     * @var string $numerKD
     */
    protected $numerKD;

    /**
     * @var string $numerEZDO
     */
    protected $numerEZDO;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $adres
     */
    protected $adres;

    /**
     * @var \Abryb\ENadawca\Type\EZDOPrzesylkaType[] $przesylka
     */
    protected $przesylka = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
    ];

    /**
     * Gets as numerKD
     *
     * @return string
     */
    public function getNumerKD()
    {
        return $this->numerKD;
    }

    /**
     * Sets a new numerKD
     *
     * @param string $numerKD
     *
     * @return self
     */
    public function setNumerKD($numerKD)
    {
        $this->numerKD = $numerKD;

        return $this;
    }

    /**
     * Gets as numerEZDO
     *
     * @return string
     */
    public function getNumerEZDO()
    {
        return $this->numerEZDO;
    }

    /**
     * Sets a new numerEZDO
     *
     * @param string $numerEZDO
     *
     * @return self
     */
    public function setNumerEZDO($numerEZDO)
    {
        $this->numerEZDO = $numerEZDO;

        return $this;
    }

    /**
     * Gets as adres
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \Abryb\ENadawca\Type\AdresType $adres
     *
     * @return self
     */
    public function setAdres(AdresType $adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Adds as przesylka
     *
     * @param \Abryb\ENadawca\Type\EZDOPrzesylkaType $przesylka
     *
     * @return self
     */
    public function addToPrzesylka(EZDOPrzesylkaType $przesylka)
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
     * @return \Abryb\ENadawca\Type\EZDOPrzesylkaType[]
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * Sets a new przesylka
     *
     * @param \Abryb\ENadawca\Type\EZDOPrzesylkaType[] $przesylka
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
