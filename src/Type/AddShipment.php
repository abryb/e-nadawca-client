<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing AddShipment
 */
class AddShipment
{
    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaType[] $przesylki
     */
    protected $przesylki = [
    ];

    /**
     * @var int $idBufor
     */
    protected $idBufor;

    /**
     * Adds as przesylki
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaType $przesylki
     *
     * @return self
     */
    public function addToPrzesylki(PrzesylkaType $przesylki)
    {
        $this->przesylki[] = $przesylki;

        return $this;
    }

    /**
     * isset przesylki
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrzesylki($index)
    {
        return isset($this->przesylki[$index]);
    }

    /**
     * unset przesylki
     *
     * @param int|string $index
     */
    public function unsetPrzesylki($index)
    {
        unset($this->przesylki[$index]);
    }

    /**
     * Gets as przesylki
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaType[]
     */
    public function getPrzesylki()
    {
        return $this->przesylki;
    }

    /**
     * Sets a new przesylki
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaType[] $przesylki
     *
     * @return self
     */
    public function setPrzesylki(array $przesylki)
    {
        $this->przesylki = $przesylki;

        return $this;
    }

    /**
     * Gets as idBufor
     *
     * @return int
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Sets a new idBufor
     *
     * @param int $idBufor
     *
     * @return self
     */
    public function setIdBufor($idBufor)
    {
        $this->idBufor = $idBufor;

        return $this;
    }
}
