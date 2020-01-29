<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaRejestrowanaType
 *
 * XSD Type: przesylkaRejestrowanaType
 */
class PrzesylkaRejestrowanaType extends PrzesylkaType
{
    /**
     * @var string $numerNadania
     */
    protected $numerNadania;

    /**
     * @var string $sygnatura
     */
    protected $sygnatura;

    /**
     * @var string $terminSprawy
     */
    protected $terminSprawy;

    /**
     * @var string $rodzaj
     */
    protected $rodzaj;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $adres
     */
    protected $adres;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $nadawca
     */
    protected $nadawca;

    /**
     * @var \Abryb\ENadawca\Type\RelatedToAllegroType $relatedToAllegro
     */
    protected $relatedToAllegro;

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
     * Gets as sygnatura
     *
     * @return string
     */
    public function getSygnatura()
    {
        return $this->sygnatura;
    }

    /**
     * Sets a new sygnatura
     *
     * @param string $sygnatura
     *
     * @return self
     */
    public function setSygnatura($sygnatura)
    {
        $this->sygnatura = $sygnatura;

        return $this;
    }

    /**
     * Gets as terminSprawy
     *
     * @return string
     */
    public function getTerminSprawy()
    {
        return $this->terminSprawy;
    }

    /**
     * Sets a new terminSprawy
     *
     * @param string $terminSprawy
     *
     * @return self
     */
    public function setTerminSprawy($terminSprawy)
    {
        $this->terminSprawy = $terminSprawy;

        return $this;
    }

    /**
     * Gets as rodzaj
     *
     * @return string
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * Sets a new rodzaj
     *
     * @param string $rodzaj
     *
     * @return self
     */
    public function setRodzaj($rodzaj)
    {
        $this->rodzaj = $rodzaj;

        return $this;
    }

    /**
     * Gets as adres
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \Abryb\ENadawca\Type\AdresType $adres
     *
     * @return self
     */
    public function setAdres(AdresType $adres)
    {
        $this->adres = $adres;

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
     * Gets as relatedToAllegro
     *
     * @return \Abryb\ENadawca\Type\RelatedToAllegroType
     */
    public function getRelatedToAllegro()
    {
        return $this->relatedToAllegro;
    }

    /**
     * Sets a new relatedToAllegro
     *
     * @param \Abryb\ENadawca\Type\RelatedToAllegroType $relatedToAllegro
     *
     * @return self
     */
    public function setRelatedToAllegro(RelatedToAllegroType $relatedToAllegro)
    {
        $this->relatedToAllegro = $relatedToAllegro;

        return $this;
    }
}
