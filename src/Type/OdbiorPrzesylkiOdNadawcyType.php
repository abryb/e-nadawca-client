<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing OdbiorPrzesylkiOdNadawcyType
 *
 * XSD Type: odbiorPrzesylkiOdNadawcyType
 */
class OdbiorPrzesylkiOdNadawcyType
{
    /**
     * @var bool $wSobote
     */
    protected $wSobote;

    /**
     * @var bool $wNiedzieleLubSwieto
     */
    protected $wNiedzieleLubSwieto;

    /**
     * @var bool $wGodzinachOd20Do7
     */
    protected $wGodzinachOd20Do7;

    /**
     * Gets as wSobote
     *
     * @return bool
     */
    public function getWSobote()
    {
        return $this->wSobote;
    }

    /**
     * Sets a new wSobote
     *
     * @param bool $wSobote
     *
     * @return self
     */
    public function setWSobote($wSobote)
    {
        $this->wSobote = $wSobote;

        return $this;
    }

    /**
     * Gets as wNiedzieleLubSwieto
     *
     * @return bool
     */
    public function getWNiedzieleLubSwieto()
    {
        return $this->wNiedzieleLubSwieto;
    }

    /**
     * Sets a new wNiedzieleLubSwieto
     *
     * @param bool $wNiedzieleLubSwieto
     *
     * @return self
     */
    public function setWNiedzieleLubSwieto($wNiedzieleLubSwieto)
    {
        $this->wNiedzieleLubSwieto = $wNiedzieleLubSwieto;

        return $this;
    }

    /**
     * Gets as wGodzinachOd20Do7
     *
     * @return bool
     */
    public function getWGodzinachOd20Do7()
    {
        return $this->wGodzinachOd20Do7;
    }

    /**
     * Sets a new wGodzinachOd20Do7
     *
     * @param bool $wGodzinachOd20Do7
     *
     * @return self
     */
    public function setWGodzinachOd20Do7($wGodzinachOd20Do7)
    {
        $this->wGodzinachOd20Do7 = $wGodzinachOd20Do7;

        return $this;
    }
}
