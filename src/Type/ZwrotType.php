<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ZwrotType
 *
 * XSD Type: zwrotType
 */
class ZwrotType
{
    /**
     * @var int $zwrotPoLiczbieDni
     */
    private $zwrotPoLiczbieDni;

    /**
     * @var bool $traktowacJakPorzucona
     */
    private $traktowacJakPorzucona;

    /**
     * @var string $sposobZwrotu
     */
    private $sposobZwrotu;

    /**
     * Gets as zwrotPoLiczbieDni
     *
     * @return int
     */
    public function getZwrotPoLiczbieDni()
    {
        return $this->zwrotPoLiczbieDni;
    }

    /**
     * Sets a new zwrotPoLiczbieDni
     *
     * @param int $zwrotPoLiczbieDni
     *
     * @return self
     */
    public function setZwrotPoLiczbieDni($zwrotPoLiczbieDni)
    {
        $this->zwrotPoLiczbieDni = $zwrotPoLiczbieDni;

        return $this;
    }

    /**
     * Gets as traktowacJakPorzucona
     *
     * @return bool
     */
    public function getTraktowacJakPorzucona()
    {
        return $this->traktowacJakPorzucona;
    }

    /**
     * Sets a new traktowacJakPorzucona
     *
     * @param bool $traktowacJakPorzucona
     *
     * @return self
     */
    public function setTraktowacJakPorzucona($traktowacJakPorzucona)
    {
        $this->traktowacJakPorzucona = $traktowacJakPorzucona;

        return $this;
    }

    /**
     * Gets as sposobZwrotu
     *
     * @return string
     */
    public function getSposobZwrotu()
    {
        return $this->sposobZwrotu;
    }

    /**
     * Sets a new sposobZwrotu
     *
     * @param string $sposobZwrotu
     *
     * @return self
     */
    public function setSposobZwrotu($sposobZwrotu)
    {
        $this->sposobZwrotu = $sposobZwrotu;

        return $this;
    }
}
