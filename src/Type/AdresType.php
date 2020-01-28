<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing AdresType
 *
 * XSD Type: adresType
 */
class AdresType
{
    /**
     * @var string $nazwa
     */
    private $nazwa;

    /**
     * @var string $nazwa2
     */
    private $nazwa2;

    /**
     * @var string $ulica
     */
    private $ulica;

    /**
     * @var string $numerDomu
     */
    private $numerDomu;

    /**
     * @var string $numerLokalu
     */
    private $numerLokalu;

    /**
     * @var string $miejscowosc
     */
    private $miejscowosc;

    /**
     * @var string $kodPocztowy
     */
    private $kodPocztowy;

    /**
     * @var string $kraj
     */
    private $kraj;

    /**
     * @var string $telefon
     */
    private $telefon;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $mobile
     */
    private $mobile;

    /**
     * @var string $osobaKontaktowa
     */
    private $osobaKontaktowa;

    /**
     * @var string $nip
     */
    private $nip;

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
     * Gets as nazwa2
     *
     * @return string
     */
    public function getNazwa2()
    {
        return $this->nazwa2;
    }

    /**
     * Sets a new nazwa2
     *
     * @param string $nazwa2
     *
     * @return self
     */
    public function setNazwa2($nazwa2)
    {
        $this->nazwa2 = $nazwa2;

        return $this;
    }

    /**
     * Gets as ulica
     *
     * @return string
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Sets a new ulica
     *
     * @param string $ulica
     *
     * @return self
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;

        return $this;
    }

    /**
     * Gets as numerDomu
     *
     * @return string
     */
    public function getNumerDomu()
    {
        return $this->numerDomu;
    }

    /**
     * Sets a new numerDomu
     *
     * @param string $numerDomu
     *
     * @return self
     */
    public function setNumerDomu($numerDomu)
    {
        $this->numerDomu = $numerDomu;

        return $this;
    }

    /**
     * Gets as numerLokalu
     *
     * @return string
     */
    public function getNumerLokalu()
    {
        return $this->numerLokalu;
    }

    /**
     * Sets a new numerLokalu
     *
     * @param string $numerLokalu
     *
     * @return self
     */
    public function setNumerLokalu($numerLokalu)
    {
        $this->numerLokalu = $numerLokalu;

        return $this;
    }

    /**
     * Gets as miejscowosc
     *
     * @return string
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }

    /**
     * Sets a new miejscowosc
     *
     * @param string $miejscowosc
     *
     * @return self
     */
    public function setMiejscowosc($miejscowosc)
    {
        $this->miejscowosc = $miejscowosc;

        return $this;
    }

    /**
     * Gets as kodPocztowy
     *
     * @return string
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
    public function setKodPocztowy($kodPocztowy)
    {
        $this->kodPocztowy = $kodPocztowy;

        return $this;
    }

    /**
     * Gets as kraj
     *
     * @return string
     */
    public function getKraj()
    {
        return $this->kraj;
    }

    /**
     * Sets a new kraj
     *
     * @param string $kraj
     *
     * @return self
     */
    public function setKraj($kraj)
    {
        $this->kraj = $kraj;

        return $this;
    }

    /**
     * Gets as telefon
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Sets a new telefon
     *
     * @param string $telefon
     *
     * @return self
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

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
     * Gets as mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets a new mobile
     *
     * @param string $mobile
     *
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Gets as osobaKontaktowa
     *
     * @return string
     */
    public function getOsobaKontaktowa()
    {
        return $this->osobaKontaktowa;
    }

    /**
     * Sets a new osobaKontaktowa
     *
     * @param string $osobaKontaktowa
     *
     * @return self
     */
    public function setOsobaKontaktowa($osobaKontaktowa)
    {
        $this->osobaKontaktowa = $osobaKontaktowa;

        return $this;
    }

    /**
     * Gets as nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Sets a new nip
     *
     * @param string $nip
     *
     * @return self
     */
    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }
}
