<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing DoreczenieUslugaKurierskaType
 *
 * XSD Type: doreczenieUslugaKurierskaType
 */
class DoreczenieUslugaKurierskaType
{
    /**
     * @var \DateTime $oczekiwanyTerminDoreczenia
     */
    protected $oczekiwanyTerminDoreczenia;

    /**
     * @var string $oczekiwanaGodzinaDoreczenia
     */
    protected $oczekiwanaGodzinaDoreczenia;

    /**
     * @var bool $wSobote
     */
    protected $wSobote;

    /**
     * @var bool $w90Minut
     */
    protected $w90Minut;

    /**
     * @var bool $wNiedzieleLubSwieto
     */
    protected $wNiedzieleLubSwieto;

    /**
     * @var bool $doRakWlasnych
     */
    protected $doRakWlasnych;

    /**
     * @var bool $wGodzinachOd20Do7
     */
    protected $wGodzinachOd20Do7;

    /**
     * @var bool $po17
     */
    protected $po17;

    /**
     * Gets as oczekiwanyTerminDoreczenia
     *
     * @return \DateTime
     */
    public function getOczekiwanyTerminDoreczenia()
    {
        return $this->oczekiwanyTerminDoreczenia;
    }

    /**
     * Sets a new oczekiwanyTerminDoreczenia
     *
     * @return self
     */
    public function setOczekiwanyTerminDoreczenia(\DateTime $oczekiwanyTerminDoreczenia)
    {
        $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;

        return $this;
    }

    /**
     * Gets as oczekiwanaGodzinaDoreczenia
     *
     * @return string
     */
    public function getOczekiwanaGodzinaDoreczenia()
    {
        return $this->oczekiwanaGodzinaDoreczenia;
    }

    /**
     * Sets a new oczekiwanaGodzinaDoreczenia
     *
     * @param string $oczekiwanaGodzinaDoreczenia
     *
     * @return self
     */
    public function setOczekiwanaGodzinaDoreczenia($oczekiwanaGodzinaDoreczenia)
    {
        $this->oczekiwanaGodzinaDoreczenia = $oczekiwanaGodzinaDoreczenia;

        return $this;
    }

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
     * Gets as w90Minut
     *
     * @return bool
     */
    public function getW90Minut()
    {
        return $this->w90Minut;
    }

    /**
     * Sets a new w90Minut
     *
     * @param bool $w90Minut
     *
     * @return self
     */
    public function setW90Minut($w90Minut)
    {
        $this->w90Minut = $w90Minut;

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
     * Gets as doRakWlasnych
     *
     * @return bool
     */
    public function getDoRakWlasnych()
    {
        return $this->doRakWlasnych;
    }

    /**
     * Sets a new doRakWlasnych
     *
     * @param bool $doRakWlasnych
     *
     * @return self
     */
    public function setDoRakWlasnych($doRakWlasnych)
    {
        $this->doRakWlasnych = $doRakWlasnych;

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

    /**
     * Gets as po17
     *
     * @return bool
     */
    public function getPo17()
    {
        return $this->po17;
    }

    /**
     * Sets a new po17
     *
     * @param bool $po17
     *
     * @return self
     */
    public function setPo17($po17)
    {
        $this->po17 = $po17;

        return $this;
    }
}
