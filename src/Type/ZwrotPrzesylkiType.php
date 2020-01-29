<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ZwrotPrzesylkiType
 *
 * XSD Type: zwrotPrzesylkiType
 */
class ZwrotPrzesylkiType
{
    /**
     * @var string $przyczyna
     */
    protected $przyczyna;

    /**
     * @var \DateTime $data
     */
    protected $data;

    /**
     * Dodatkowy opisowy powód zwrotu przesyłki
     *
     * @var string $przyczynaZwrotuDodatkowa
     */
    protected $przyczynaZwrotuDodatkowa;

    /**
     * Gets as przyczyna
     *
     * @return string
     */
    public function getPrzyczyna()
    {
        return $this->przyczyna;
    }

    /**
     * Sets a new przyczyna
     *
     * @param string $przyczyna
     *
     * @return self
     */
    public function setPrzyczyna($przyczyna)
    {
        $this->przyczyna = $przyczyna;

        return $this;
    }

    /**
     * Gets as data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @return self
     */
    public function setData(\DateTime $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Gets as przyczynaZwrotuDodatkowa
     *
     * Dodatkowy opisowy powód zwrotu przesyłki
     *
     * @return string
     */
    public function getPrzyczynaZwrotuDodatkowa()
    {
        return $this->przyczynaZwrotuDodatkowa;
    }

    /**
     * Sets a new przyczynaZwrotuDodatkowa
     *
     * Dodatkowy opisowy powód zwrotu przesyłki
     *
     * @param string $przyczynaZwrotuDodatkowa
     *
     * @return self
     */
    public function setPrzyczynaZwrotuDodatkowa($przyczynaZwrotuDodatkowa)
    {
        $this->przyczynaZwrotuDodatkowa = $przyczynaZwrotuDodatkowa;

        return $this;
    }
}
