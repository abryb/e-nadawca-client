<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing KierunekType
 *
 * XSD Type: kierunekType
 */
class KierunekType
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var string $opis
     */
    protected $opis;

    /**
     * @var string $pna
     */
    protected $pna;

    /**
     * @var string[] $kodPocztowy
     */
    protected $kodPocztowy = [
    ];

    /**
     * Gets as id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Sets a new opis
     *
     * @param string $opis
     *
     * @return self
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Gets as pna
     *
     * @return string
     */
    public function getPna()
    {
        return $this->pna;
    }

    /**
     * Sets a new pna
     *
     * @param string $pna
     *
     * @return self
     */
    public function setPna($pna)
    {
        $this->pna = $pna;

        return $this;
    }

    /**
     * Adds as kodPocztowy
     *
     * @param string $kodPocztowy
     *
     * @return self
     */
    public function addToKodPocztowy($kodPocztowy)
    {
        $this->kodPocztowy[] = $kodPocztowy;

        return $this;
    }

    /**
     * isset kodPocztowy
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetKodPocztowy($index)
    {
        return isset($this->kodPocztowy[$index]);
    }

    /**
     * unset kodPocztowy
     *
     * @param int|string $index
     */
    public function unsetKodPocztowy($index)
    {
        unset($this->kodPocztowy[$index]);
    }

    /**
     * Gets as kodPocztowy
     *
     * @return string[]
     */
    public function getKodPocztowy()
    {
        return $this->kodPocztowy;
    }

    /**
     * Sets a new kodPocztowy
     *
     * @param string $kodPocztowy
     *
     * @return self
     */
    public function setKodPocztowy(array $kodPocztowy)
    {
        $this->kodPocztowy = $kodPocztowy;

        return $this;
    }
}
