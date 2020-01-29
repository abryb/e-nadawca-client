<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing AddShipmentResponseItemType
 *
 * XSD Type: addShipmentResponseItemType
 */
class AddShipmentResponseItemType
{
    /**
     * @var string $numerNadania
     */
    protected $numerNadania;

    /**
     * @var string $guid
     */
    protected $guid;

    /**
     * @var string $numerTransakcjiOdbioru
     */
    protected $numerTransakcjiOdbioru;

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
    ];

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     *
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;

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

    /**
     * Gets as numerTransakcjiOdbioru
     *
     * @return string
     */
    public function getNumerTransakcjiOdbioru()
    {
        return $this->numerTransakcjiOdbioru;
    }

    /**
     * Sets a new numerTransakcjiOdbioru
     *
     * @param string $numerTransakcjiOdbioru
     *
     * @return self
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
    {
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;

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
