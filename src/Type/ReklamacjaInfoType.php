<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ReklamacjaInfoType
 *
 * XSD Type: reklamacjaInfoType
 */
class ReklamacjaInfoType
{
    /**
     * @var string $idReklamacja
     */
    private $idReklamacja;

    /**
     * @var string $guidPrzesylki
     */
    private $guidPrzesylki;

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
     * Gets as guidPrzesylki
     *
     * @return string
     */
    public function getGuidPrzesylki()
    {
        return $this->guidPrzesylki;
    }

    /**
     * Sets a new guidPrzesylki
     *
     * @param string $guidPrzesylki
     *
     * @return self
     */
    public function setGuidPrzesylki($guidPrzesylki)
    {
        $this->guidPrzesylki = $guidPrzesylki;

        return $this;
    }
}
