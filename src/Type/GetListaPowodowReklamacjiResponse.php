<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetListaPowodowReklamacjiResponse
 */
class GetListaPowodowReklamacjiResponse
{
    /**
     * @var \Abryb\ENadawca\Type\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     */
    protected $kategoriePowodowReklamacji = [
    ];

    /**
     * Adds as kategoriePowodowReklamacji
     *
     * @param \Abryb\ENadawca\Type\KategoriePowodowReklamacjiType $kategoriePowodowReklamacji
     *
     * @return self
     */
    public function addToKategoriePowodowReklamacji(KategoriePowodowReklamacjiType $kategoriePowodowReklamacji)
    {
        $this->kategoriePowodowReklamacji[] = $kategoriePowodowReklamacji;

        return $this;
    }

    /**
     * isset kategoriePowodowReklamacji
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetKategoriePowodowReklamacji($index)
    {
        return isset($this->kategoriePowodowReklamacji[$index]);
    }

    /**
     * unset kategoriePowodowReklamacji
     *
     * @param int|string $index
     */
    public function unsetKategoriePowodowReklamacji($index)
    {
        unset($this->kategoriePowodowReklamacji[$index]);
    }

    /**
     * Gets as kategoriePowodowReklamacji
     *
     * @return \Abryb\ENadawca\Type\KategoriePowodowReklamacjiType[]
     */
    public function getKategoriePowodowReklamacji()
    {
        return $this->kategoriePowodowReklamacji;
    }

    /**
     * Sets a new kategoriePowodowReklamacji
     *
     * @param \Abryb\ENadawca\Type\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     *
     * @return self
     */
    public function setKategoriePowodowReklamacji(array $kategoriePowodowReklamacji)
    {
        $this->kategoriePowodowReklamacji = $kategoriePowodowReklamacji;

        return $this;
    }
}
