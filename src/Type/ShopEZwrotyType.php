<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ShopEZwrotyType
 *
 * XSD Type: shopEZwrotyType
 */
class ShopEZwrotyType
{
    /**
     * @var int $idShop
     */
    protected $idShop;

    /**
     * @var string $nazwa
     */
    protected $nazwa;

    /**
     * @var string $nazwa2
     */
    protected $nazwa2;

    /**
     * @var string $przyjaznaNazwa
     */
    protected $przyjaznaNazwa;

    /**
     * @var string $ulica
     */
    protected $ulica;

    /**
     * @var string $numerDomu
     */
    protected $numerDomu;

    /**
     * @var string $numerLokalu
     */
    protected $numerLokalu;

    /**
     * @var string $miejscowosc
     */
    protected $miejscowosc;

    /**
     * @var string $kodPocztowy
     */
    protected $kodPocztowy;

    /**
     * @var string $mobile
     */
    protected $mobile;

    /**
     * @var string $email
     */
    protected $email;

    /**
     * @var string $nip
     */
    protected $nip;

    /**
     * @var string $regon
     */
    protected $regon;

    /**
     * @var string $krs
     */
    protected $krs;

    /**
     * @var string $eZwrotTyp
     */
    protected $eZwrotTyp;

    /**
     * @var bool $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     */
    protected $wymagalnoscNumeruIdentyfikujacegoPrzesylke;

    /**
     * @var string[] $eZwrotPrzesylki
     */
    protected $eZwrotPrzesylki = [
    ];

    /**
     * Gets as idShop
     *
     * @return int
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Sets a new idShop
     *
     * @param int $idShop
     *
     * @return self
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;

        return $this;
    }

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
     * Gets as przyjaznaNazwa
     *
     * @return string
     */
    public function getPrzyjaznaNazwa()
    {
        return $this->przyjaznaNazwa;
    }

    /**
     * Sets a new przyjaznaNazwa
     *
     * @param string $przyjaznaNazwa
     *
     * @return self
     */
    public function setPrzyjaznaNazwa($przyjaznaNazwa)
    {
        $this->przyjaznaNazwa = $przyjaznaNazwa;

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

    /**
     * Gets as regon
     *
     * @return string
     */
    public function getRegon()
    {
        return $this->regon;
    }

    /**
     * Sets a new regon
     *
     * @param string $regon
     *
     * @return self
     */
    public function setRegon($regon)
    {
        $this->regon = $regon;

        return $this;
    }

    /**
     * Gets as krs
     *
     * @return string
     */
    public function getKrs()
    {
        return $this->krs;
    }

    /**
     * Sets a new krs
     *
     * @param string $krs
     *
     * @return self
     */
    public function setKrs($krs)
    {
        $this->krs = $krs;

        return $this;
    }

    /**
     * Gets as eZwrotTyp
     *
     * @return string
     */
    public function getEZwrotTyp()
    {
        return $this->eZwrotTyp;
    }

    /**
     * Sets a new eZwrotTyp
     *
     * @param string $eZwrotTyp
     *
     * @return self
     */
    public function setEZwrotTyp($eZwrotTyp)
    {
        $this->eZwrotTyp = $eZwrotTyp;

        return $this;
    }

    /**
     * Gets as wymagalnoscNumeruIdentyfikujacegoPrzesylke
     *
     * @return bool
     */
    public function getWymagalnoscNumeruIdentyfikujacegoPrzesylke()
    {
        return $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke;
    }

    /**
     * Sets a new wymagalnoscNumeruIdentyfikujacegoPrzesylke
     *
     * @param bool $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     *
     * @return self
     */
    public function setWymagalnoscNumeruIdentyfikujacegoPrzesylke($wymagalnoscNumeruIdentyfikujacegoPrzesylke)
    {
        $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke = $wymagalnoscNumeruIdentyfikujacegoPrzesylke;

        return $this;
    }

    /**
     * Adds as eZwrotPrzesylki
     *
     * @param string $eZwrotPrzesylki
     *
     * @return self
     */
    public function addToEZwrotPrzesylki($eZwrotPrzesylki)
    {
        $this->eZwrotPrzesylki[] = $eZwrotPrzesylki;

        return $this;
    }

    /**
     * isset eZwrotPrzesylki
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEZwrotPrzesylki($index)
    {
        return isset($this->eZwrotPrzesylki[$index]);
    }

    /**
     * unset eZwrotPrzesylki
     *
     * @param int|string $index
     */
    public function unsetEZwrotPrzesylki($index)
    {
        unset($this->eZwrotPrzesylki[$index]);
    }

    /**
     * Gets as eZwrotPrzesylki
     *
     * @return string[]
     */
    public function getEZwrotPrzesylki()
    {
        return $this->eZwrotPrzesylki;
    }

    /**
     * Sets a new eZwrotPrzesylki
     *
     * @param string $eZwrotPrzesylki
     *
     * @return self
     */
    public function setEZwrotPrzesylki(array $eZwrotPrzesylki)
    {
        $this->eZwrotPrzesylki = $eZwrotPrzesylki;

        return $this;
    }
}
