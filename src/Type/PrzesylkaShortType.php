<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaShortType
 *
 * XSD Type: przesylkaShortType
 */
class PrzesylkaShortType
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
     * @var \DateTime $dataNadania
     */
    protected $dataNadania;

    /**
     * @var int $razem
     */
    protected $razem;

    /**
     * @var int $pobranie
     */
    protected $pobranie;

    /**
     * @var string $status
     */
    protected $status;

    /**
     * @var string[] $czynnosciUpustowe
     */
    protected $czynnosciUpustowe = [
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
     * Gets as dataNadania
     *
     * @return \DateTime
     */
    public function getDataNadania()
    {
        return $this->dataNadania;
    }

    /**
     * Sets a new dataNadania
     *
     * @return self
     */
    public function setDataNadania(\DateTime $dataNadania)
    {
        $this->dataNadania = $dataNadania;

        return $this;
    }

    /**
     * Gets as razem
     *
     * @return int
     */
    public function getRazem()
    {
        return $this->razem;
    }

    /**
     * Sets a new razem
     *
     * @param int $razem
     *
     * @return self
     */
    public function setRazem($razem)
    {
        $this->razem = $razem;

        return $this;
    }

    /**
     * Gets as pobranie
     *
     * @return int
     */
    public function getPobranie()
    {
        return $this->pobranie;
    }

    /**
     * Sets a new pobranie
     *
     * @param int $pobranie
     *
     * @return self
     */
    public function setPobranie($pobranie)
    {
        $this->pobranie = $pobranie;

        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Adds as czynnosciUpustowe
     *
     * @param string $czynnosciUpustowe
     *
     * @return self
     */
    public function addToCzynnosciUpustowe($czynnosciUpustowe)
    {
        $this->czynnosciUpustowe[] = $czynnosciUpustowe;

        return $this;
    }

    /**
     * isset czynnosciUpustowe
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCzynnosciUpustowe($index)
    {
        return isset($this->czynnosciUpustowe[$index]);
    }

    /**
     * unset czynnosciUpustowe
     *
     * @param int|string $index
     */
    public function unsetCzynnosciUpustowe($index)
    {
        unset($this->czynnosciUpustowe[$index]);
    }

    /**
     * Gets as czynnosciUpustowe
     *
     * @return string[]
     */
    public function getCzynnosciUpustowe()
    {
        return $this->czynnosciUpustowe;
    }

    /**
     * Sets a new czynnosciUpustowe
     *
     * @param string $czynnosciUpustowe
     *
     * @return self
     */
    public function setCzynnosciUpustowe(array $czynnosciUpustowe)
    {
        $this->czynnosciUpustowe = $czynnosciUpustowe;

        return $this;
    }
}
