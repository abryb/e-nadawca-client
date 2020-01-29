<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetListaZgodEZwrotowResponse
 */
class GetListaZgodEZwrotowResponse
{
    /**
     * @var \Abryb\ENadawca\Type\OczekujeNaZgodeEZwrotType[] $lista
     */
    protected $lista = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
    ];

    /**
     * Adds as lista
     *
     * @param \Abryb\ENadawca\Type\OczekujeNaZgodeEZwrotType $lista
     *
     * @return self
     */
    public function addToLista(OczekujeNaZgodeEZwrotType $lista)
    {
        $this->lista[] = $lista;

        return $this;
    }

    /**
     * isset lista
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLista($index)
    {
        return isset($this->lista[$index]);
    }

    /**
     * unset lista
     *
     * @param int|string $index
     */
    public function unsetLista($index)
    {
        unset($this->lista[$index]);
    }

    /**
     * Gets as lista
     *
     * @return \Abryb\ENadawca\Type\OczekujeNaZgodeEZwrotType[]
     */
    public function getLista()
    {
        return $this->lista;
    }

    /**
     * Sets a new lista
     *
     * @param \Abryb\ENadawca\Type\OczekujeNaZgodeEZwrotType[] $lista
     *
     * @return self
     */
    public function setLista(array $lista)
    {
        $this->lista = $lista;

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
