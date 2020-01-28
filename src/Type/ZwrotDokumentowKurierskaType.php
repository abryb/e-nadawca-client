<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ZwrotDokumentowKurierskaType
 *
 * XSD Type: zwrotDokumentowKurierskaType
 */
class ZwrotDokumentowKurierskaType
{
    /**
     * @var string $rodzajPocztex
     */
    private $rodzajPocztex;

    /**
     * @var string $rodzajPaczka
     */
    private $rodzajPaczka;

    /**
     * @var \Abryb\ENadawca\Type\RodzajListType $rodzajList
     */
    private $rodzajList;

    /**
     * Gets as rodzajPocztex
     *
     * @return string
     */
    public function getRodzajPocztex()
    {
        return $this->rodzajPocztex;
    }

    /**
     * Sets a new rodzajPocztex
     *
     * @param string $rodzajPocztex
     *
     * @return self
     */
    public function setRodzajPocztex($rodzajPocztex)
    {
        $this->rodzajPocztex = $rodzajPocztex;

        return $this;
    }

    /**
     * Gets as rodzajPaczka
     *
     * @return string
     */
    public function getRodzajPaczka()
    {
        return $this->rodzajPaczka;
    }

    /**
     * Sets a new rodzajPaczka
     *
     * @param string $rodzajPaczka
     *
     * @return self
     */
    public function setRodzajPaczka($rodzajPaczka)
    {
        $this->rodzajPaczka = $rodzajPaczka;

        return $this;
    }

    /**
     * Gets as rodzajList
     *
     * @return \Abryb\ENadawca\Type\RodzajListType
     */
    public function getRodzajList()
    {
        return $this->rodzajList;
    }

    /**
     * Sets a new rodzajList
     *
     * @param \Abryb\ENadawca\Type\RodzajListType $rodzajList
     *
     * @return self
     */
    public function setRodzajList(RodzajListType $rodzajList)
    {
        $this->rodzajList = $rodzajList;

        return $this;
    }
}
