<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing KategoriePowodowReklamacjiType
 *
 * XSD Type: kategoriePowodowReklamacjiType
 */
class KategoriePowodowReklamacjiType
{
    /**
     * @var string $nazwa
     */
    private $nazwa;

    /**
     * @var \Abryb\ENadawca\Type\PowodReklamacjiType[] $powodReklamacji
     */
    private $powodReklamacji = [
    ];

    /**
     * Gets as nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Sets a new nazwa
     *
     * @param string $nazwa
     *
     * @return self
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Adds as powodReklamacji
     *
     * @param \Abryb\ENadawca\Type\PowodReklamacjiType $powodReklamacji
     *
     * @return self
     */
    public function addToPowodReklamacji(PowodReklamacjiType $powodReklamacji)
    {
        $this->powodReklamacji[] = $powodReklamacji;

        return $this;
    }

    /**
     * isset powodReklamacji
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPowodReklamacji($index)
    {
        return isset($this->powodReklamacji[$index]);
    }

    /**
     * unset powodReklamacji
     *
     * @param int|string $index
     */
    public function unsetPowodReklamacji($index)
    {
        unset($this->powodReklamacji[$index]);
    }

    /**
     * Gets as powodReklamacji
     *
     * @return \Abryb\ENadawca\Type\PowodReklamacjiType[]
     */
    public function getPowodReklamacji()
    {
        return $this->powodReklamacji;
    }

    /**
     * Sets a new powodReklamacji
     *
     * @param \Abryb\ENadawca\Type\PowodReklamacjiType[] $powodReklamacji
     *
     * @return self
     */
    public function setPowodReklamacji(array $powodReklamacji)
    {
        $this->powodReklamacji = $powodReklamacji;

        return $this;
    }
}
