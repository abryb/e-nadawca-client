<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetKierunkiResponse
 */
class GetKierunkiResponse
{
    /**
     * @var \Abryb\ENadawca\Type\KierunekType[] $kierunek
     */
    protected $kierunek = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
    ];

    /**
     * Adds as kierunek
     *
     * @param \Abryb\ENadawca\Type\KierunekType $kierunek
     *
     * @return self
     */
    public function addToKierunek(KierunekType $kierunek)
    {
        $this->kierunek[] = $kierunek;

        return $this;
    }

    /**
     * isset kierunek
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetKierunek($index)
    {
        return isset($this->kierunek[$index]);
    }

    /**
     * unset kierunek
     *
     * @param int|string $index
     */
    public function unsetKierunek($index)
    {
        unset($this->kierunek[$index]);
    }

    /**
     * Gets as kierunek
     *
     * @return \Abryb\ENadawca\Type\KierunekType[]
     */
    public function getKierunek()
    {
        return $this->kierunek;
    }

    /**
     * Sets a new kierunek
     *
     * @param \Abryb\ENadawca\Type\KierunekType[] $kierunek
     *
     * @return self
     */
    public function setKierunek(array $kierunek)
    {
        $this->kierunek = $kierunek;

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
