<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing AddZalacznikDoReklamacji
 */
class AddZalacznikDoReklamacji
{
    /**
     * @var string $idReklamacja
     */
    private $idReklamacja;

    /**
     * @var \Abryb\ENadawca\Type\ZalacznikDoReklamacjiType[] $zalacznik
     */
    private $zalacznik = [
    ];

    /**
     * Gets as idReklamacja
     *
     * @return string
     */
    public function getIdReklamacja()
    {
        return $this->idReklamacja;
    }

    /**
     * Sets a new idReklamacja
     *
     * @param string $idReklamacja
     *
     * @return self
     */
    public function setIdReklamacja($idReklamacja)
    {
        $this->idReklamacja = $idReklamacja;

        return $this;
    }

    /**
     * Adds as zalacznik
     *
     * @param \Abryb\ENadawca\Type\ZalacznikDoReklamacjiType $zalacznik
     *
     * @return self
     */
    public function addToZalacznik(ZalacznikDoReklamacjiType $zalacznik)
    {
        $this->zalacznik[] = $zalacznik;

        return $this;
    }

    /**
     * isset zalacznik
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetZalacznik($index)
    {
        return isset($this->zalacznik[$index]);
    }

    /**
     * unset zalacznik
     *
     * @param int|string $index
     */
    public function unsetZalacznik($index)
    {
        unset($this->zalacznik[$index]);
    }

    /**
     * Gets as zalacznik
     *
     * @return \Abryb\ENadawca\Type\ZalacznikDoReklamacjiType[]
     */
    public function getZalacznik()
    {
        return $this->zalacznik;
    }

    /**
     * Sets a new zalacznik
     *
     * @param \Abryb\ENadawca\Type\ZalacznikDoReklamacjiType[] $zalacznik
     *
     * @return self
     */
    public function setZalacznik(array $zalacznik)
    {
        $this->zalacznik = $zalacznik;

        return $this;
    }
}
