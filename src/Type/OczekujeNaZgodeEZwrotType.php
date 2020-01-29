<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing OczekujeNaZgodeEZwrotType
 *
 * XSD Type: oczekujeNaZgodeEZwrotType
 */
class OczekujeNaZgodeEZwrotType
{
    /**
     * @var int $idZgody
     */
    protected $idZgody;

    /**
     * @var string $nazwaProduktu
     */
    protected $nazwaProduktu;

    /**
     * @var string $numerZamowienia
     */
    protected $numerZamowienia;

    /**
     * @var string $numerNadania
     */
    protected $numerNadania;

    /**
     * @var string $email
     */
    protected $email;

    /**
     * @var \DateTime $dataNadania
     */
    protected $dataNadania;

    /**
     * @var string $guidZgodaEZwrot
     */
    protected $guidZgodaEZwrot;

    /**
     * @var \Abryb\ENadawca\Type\ShopEZwrotyType $sklepEZwrot
     */
    protected $sklepEZwrot;

    /**
     * Gets as idZgody
     *
     * @return int
     */
    public function getIdZgody()
    {
        return $this->idZgody;
    }

    /**
     * Sets a new idZgody
     *
     * @param int $idZgody
     *
     * @return self
     */
    public function setIdZgody($idZgody)
    {
        $this->idZgody = $idZgody;

        return $this;
    }

    /**
     * Gets as nazwaProduktu
     *
     * @return string
     */
    public function getNazwaProduktu()
    {
        return $this->nazwaProduktu;
    }

    /**
     * Sets a new nazwaProduktu
     *
     * @param string $nazwaProduktu
     *
     * @return self
     */
    public function setNazwaProduktu($nazwaProduktu)
    {
        $this->nazwaProduktu = $nazwaProduktu;

        return $this;
    }

    /**
     * Gets as numerZamowienia
     *
     * @return string
     */
    public function getNumerZamowienia()
    {
        return $this->numerZamowienia;
    }

    /**
     * Sets a new numerZamowienia
     *
     * @param string $numerZamowienia
     *
     * @return self
     */
    public function setNumerZamowienia($numerZamowienia)
    {
        $this->numerZamowienia = $numerZamowienia;

        return $this;
    }

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
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
     * Gets as guidZgodaEZwrot
     *
     * @return string
     */
    public function getGuidZgodaEZwrot()
    {
        return $this->guidZgodaEZwrot;
    }

    /**
     * Sets a new guidZgodaEZwrot
     *
     * @param string $guidZgodaEZwrot
     *
     * @return self
     */
    public function setGuidZgodaEZwrot($guidZgodaEZwrot)
    {
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;

        return $this;
    }

    /**
     * Gets as sklepEZwrot
     *
     * @return \Abryb\ENadawca\Type\ShopEZwrotyType
     */
    public function getSklepEZwrot()
    {
        return $this->sklepEZwrot;
    }

    /**
     * Sets a new sklepEZwrot
     *
     * @param \Abryb\ENadawca\Type\ShopEZwrotyType $sklepEZwrot
     *
     * @return self
     */
    public function setSklepEZwrot(ShopEZwrotyType $sklepEZwrot)
    {
        $this->sklepEZwrot = $sklepEZwrot;

        return $this;
    }
}
