<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ZamowKuriera
 */
class ZamowKuriera
{
    /**
     * @var \Abryb\ENadawca\Type\AdresType $miejsceOdbioru
     */
    protected $miejsceOdbioru;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $nadawca
     */
    protected $nadawca;

    /**
     * @var string $oczekiwanaDataOdbioru
     */
    protected $oczekiwanaDataOdbioru;

    /**
     * @var string $oczekiwanaGodzinaOdbioru
     */
    protected $oczekiwanaGodzinaOdbioru;

    /**
     * @var string $szacowanaIloscPrzeslek
     */
    protected $szacowanaIloscPrzeslek;

    /**
     * @var string $szacowanaLacznaMasaPrzesylek
     */
    protected $szacowanaLacznaMasaPrzesylek;

    /**
     * Gets as miejsceOdbioru
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getMiejsceOdbioru()
    {
        return $this->miejsceOdbioru;
    }

    /**
     * Sets a new miejsceOdbioru
     *
     * @param \Abryb\ENadawca\Type\AdresType $miejsceOdbioru
     *
     * @return self
     */
    public function setMiejsceOdbioru(AdresType $miejsceOdbioru)
    {
        $this->miejsceOdbioru = $miejsceOdbioru;

        return $this;
    }

    /**
     * Gets as nadawca
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getNadawca()
    {
        return $this->nadawca;
    }

    /**
     * Sets a new nadawca
     *
     * @param \Abryb\ENadawca\Type\AdresType $nadawca
     *
     * @return self
     */
    public function setNadawca(AdresType $nadawca)
    {
        $this->nadawca = $nadawca;

        return $this;
    }

    /**
     * Gets as oczekiwanaDataOdbioru
     *
     * @return string
     */
    public function getOczekiwanaDataOdbioru()
    {
        return $this->oczekiwanaDataOdbioru;
    }

    /**
     * Sets a new oczekiwanaDataOdbioru
     *
     * @param string $oczekiwanaDataOdbioru
     *
     * @return self
     */
    public function setOczekiwanaDataOdbioru($oczekiwanaDataOdbioru)
    {
        $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;

        return $this;
    }

    /**
     * Gets as oczekiwanaGodzinaOdbioru
     *
     * @return string
     */
    public function getOczekiwanaGodzinaOdbioru()
    {
        return $this->oczekiwanaGodzinaOdbioru;
    }

    /**
     * Sets a new oczekiwanaGodzinaOdbioru
     *
     * @param string $oczekiwanaGodzinaOdbioru
     *
     * @return self
     */
    public function setOczekiwanaGodzinaOdbioru($oczekiwanaGodzinaOdbioru)
    {
        $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;

        return $this;
    }

    /**
     * Gets as szacowanaIloscPrzeslek
     *
     * @return string
     */
    public function getSzacowanaIloscPrzeslek()
    {
        return $this->szacowanaIloscPrzeslek;
    }

    /**
     * Sets a new szacowanaIloscPrzeslek
     *
     * @param string $szacowanaIloscPrzeslek
     *
     * @return self
     */
    public function setSzacowanaIloscPrzeslek($szacowanaIloscPrzeslek)
    {
        $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;

        return $this;
    }

    /**
     * Gets as szacowanaLacznaMasaPrzesylek
     *
     * @return string
     */
    public function getSzacowanaLacznaMasaPrzesylek()
    {
        return $this->szacowanaLacznaMasaPrzesylek;
    }

    /**
     * Sets a new szacowanaLacznaMasaPrzesylek
     *
     * @param string $szacowanaLacznaMasaPrzesylek
     *
     * @return self
     */
    public function setSzacowanaLacznaMasaPrzesylek($szacowanaLacznaMasaPrzesylek)
    {
        $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;

        return $this;
    }
}
