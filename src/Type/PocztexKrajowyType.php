<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PocztexKrajowyType
 *
 * XSD Type: pocztexKrajowyType
 */
class PocztexKrajowyType extends PrzesylkaRejestrowanaType
{
    /**
     * @var bool $posteRestante
     */
    private $posteRestante;

    /**
     * @var string $terminRodzaj
     */
    private $terminRodzaj;

    /**
     * @var bool $kopertaFirmowa
     */
    private $kopertaFirmowa;

    /**
     * @var int $masa
     */
    private $masa;

    /**
     * @var int $wartosc
     */
    private $wartosc;

    /**
     * @var bool $ostroznie
     */
    private $ostroznie;

    /**
     * @var bool $ponadgabaryt
     */
    private $ponadgabaryt;

    /**
     * @var string $uiszczaOplate
     */
    private $uiszczaOplate;

    /**
     * @var int $odleglosc
     */
    private $odleglosc;

    /**
     * @var string $zawartosc
     */
    private $zawartosc;

    /**
     * @var bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    private $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;

    /**
     * @var \Abryb\ENadawca\Type\PobranieType $pobranie
     */
    private $pobranie;

    /**
     * @var \Abryb\ENadawca\Type\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     */
    private $odbiorPrzesylkiOdNadawcy;

    /**
     * @var \Abryb\ENadawca\Type\DoreczenieType $doreczenie
     */
    private $doreczenie;

    /**
     * @var \Abryb\ENadawca\Type\ZwrotDokumentowType $zwrotDokumentow
     */
    private $zwrotDokumentow;

    /**
     * @var \Abryb\ENadawca\Type\PotwierdzenieOdbioruType $potwierdzenieOdbioru
     */
    private $potwierdzenieOdbioru;

    /**
     * @var \Abryb\ENadawca\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    private $potwierdzenieDoreczenia;

    /**
     * @var \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     */
    private $ubezpieczenie;

    /**
     * Gets as posteRestante
     *
     * @return bool
     */
    public function getPosteRestante()
    {
        return $this->posteRestante;
    }

    /**
     * Sets a new posteRestante
     *
     * @param bool $posteRestante
     *
     * @return self
     */
    public function setPosteRestante($posteRestante)
    {
        $this->posteRestante = $posteRestante;

        return $this;
    }

    /**
     * Gets as terminRodzaj
     *
     * @return string
     */
    public function getTerminRodzaj()
    {
        return $this->terminRodzaj;
    }

    /**
     * Sets a new terminRodzaj
     *
     * @param string $terminRodzaj
     *
     * @return self
     */
    public function setTerminRodzaj($terminRodzaj)
    {
        $this->terminRodzaj = $terminRodzaj;

        return $this;
    }

    /**
     * Gets as kopertaFirmowa
     *
     * @return bool
     */
    public function getKopertaFirmowa()
    {
        return $this->kopertaFirmowa;
    }

    /**
     * Sets a new kopertaFirmowa
     *
     * @param bool $kopertaFirmowa
     *
     * @return self
     */
    public function setKopertaFirmowa($kopertaFirmowa)
    {
        $this->kopertaFirmowa = $kopertaFirmowa;

        return $this;
    }

    /**
     * Gets as masa
     *
     * @return int
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Sets a new masa
     *
     * @param int $masa
     *
     * @return self
     */
    public function setMasa($masa)
    {
        $this->masa = $masa;

        return $this;
    }

    /**
     * Gets as wartosc
     *
     * @return int
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Sets a new wartosc
     *
     * @param int $wartosc
     *
     * @return self
     */
    public function setWartosc($wartosc)
    {
        $this->wartosc = $wartosc;

        return $this;
    }

    /**
     * Gets as ostroznie
     *
     * @return bool
     */
    public function getOstroznie()
    {
        return $this->ostroznie;
    }

    /**
     * Sets a new ostroznie
     *
     * @param bool $ostroznie
     *
     * @return self
     */
    public function setOstroznie($ostroznie)
    {
        $this->ostroznie = $ostroznie;

        return $this;
    }

    /**
     * Gets as ponadgabaryt
     *
     * @return bool
     */
    public function getPonadgabaryt()
    {
        return $this->ponadgabaryt;
    }

    /**
     * Sets a new ponadgabaryt
     *
     * @param bool $ponadgabaryt
     *
     * @return self
     */
    public function setPonadgabaryt($ponadgabaryt)
    {
        $this->ponadgabaryt = $ponadgabaryt;

        return $this;
    }

    /**
     * Gets as uiszczaOplate
     *
     * @return string
     */
    public function getUiszczaOplate()
    {
        return $this->uiszczaOplate;
    }

    /**
     * Sets a new uiszczaOplate
     *
     * @param string $uiszczaOplate
     *
     * @return self
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
        $this->uiszczaOplate = $uiszczaOplate;

        return $this;
    }

    /**
     * Gets as odleglosc
     *
     * @return int
     */
    public function getOdleglosc()
    {
        return $this->odleglosc;
    }

    /**
     * Sets a new odleglosc
     *
     * @param int $odleglosc
     *
     * @return self
     */
    public function setOdleglosc($odleglosc)
    {
        $this->odleglosc = $odleglosc;

        return $this;
    }

    /**
     * Gets as zawartosc
     *
     * @return string
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Sets a new zawartosc
     *
     * @param string $zawartosc
     *
     * @return self
     */
    public function setZawartosc($zawartosc)
    {
        $this->zawartosc = $zawartosc;

        return $this;
    }

    /**
     * Gets as sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     *
     * @return bool
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * Sets a new sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     *
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     *
     * @return self
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;

        return $this;
    }

    /**
     * Gets as pobranie
     *
     * @return \Abryb\ENadawca\Type\PobranieType
     */
    public function getPobranie()
    {
        return $this->pobranie;
    }

    /**
     * Sets a new pobranie
     *
     * @param \Abryb\ENadawca\Type\PobranieType $pobranie
     *
     * @return self
     */
    public function setPobranie(PobranieType $pobranie)
    {
        $this->pobranie = $pobranie;

        return $this;
    }

    /**
     * Gets as odbiorPrzesylkiOdNadawcy
     *
     * @return \Abryb\ENadawca\Type\OdbiorPrzesylkiOdNadawcyType
     */
    public function getOdbiorPrzesylkiOdNadawcy()
    {
        return $this->odbiorPrzesylkiOdNadawcy;
    }

    /**
     * Sets a new odbiorPrzesylkiOdNadawcy
     *
     * @param \Abryb\ENadawca\Type\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     *
     * @return self
     */
    public function setOdbiorPrzesylkiOdNadawcy(OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy)
    {
        $this->odbiorPrzesylkiOdNadawcy = $odbiorPrzesylkiOdNadawcy;

        return $this;
    }

    /**
     * Gets as doreczenie
     *
     * @return \Abryb\ENadawca\Type\DoreczenieType
     */
    public function getDoreczenie()
    {
        return $this->doreczenie;
    }

    /**
     * Sets a new doreczenie
     *
     * @param \Abryb\ENadawca\Type\DoreczenieType $doreczenie
     *
     * @return self
     */
    public function setDoreczenie(DoreczenieType $doreczenie)
    {
        $this->doreczenie = $doreczenie;

        return $this;
    }

    /**
     * Gets as zwrotDokumentow
     *
     * @return \Abryb\ENadawca\Type\ZwrotDokumentowType
     */
    public function getZwrotDokumentow()
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Sets a new zwrotDokumentow
     *
     * @param \Abryb\ENadawca\Type\ZwrotDokumentowType $zwrotDokumentow
     *
     * @return self
     */
    public function setZwrotDokumentow(ZwrotDokumentowType $zwrotDokumentow)
    {
        $this->zwrotDokumentow = $zwrotDokumentow;

        return $this;
    }

    /**
     * Gets as potwierdzenieOdbioru
     *
     * @return \Abryb\ENadawca\Type\PotwierdzenieOdbioruType
     */
    public function getPotwierdzenieOdbioru()
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Sets a new potwierdzenieOdbioru
     *
     * @param \Abryb\ENadawca\Type\PotwierdzenieOdbioruType $potwierdzenieOdbioru
     *
     * @return self
     */
    public function setPotwierdzenieOdbioru(PotwierdzenieOdbioruType $potwierdzenieOdbioru)
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;

        return $this;
    }

    /**
     * Gets as potwierdzenieDoreczenia
     *
     * @return \Abryb\ENadawca\Type\PotwierdzenieDoreczeniaType
     */
    public function getPotwierdzenieDoreczenia()
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * Sets a new potwierdzenieDoreczenia
     *
     * @param \Abryb\ENadawca\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     *
     * @return self
     */
    public function setPotwierdzenieDoreczenia(PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia)
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

        return $this;
    }

    /**
     * Gets as ubezpieczenie
     *
     * @return \Abryb\ENadawca\Type\UbezpieczenieType
     */
    public function getUbezpieczenie()
    {
        return $this->ubezpieczenie;
    }

    /**
     * Sets a new ubezpieczenie
     *
     * @param \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     *
     * @return self
     */
    public function setUbezpieczenie(UbezpieczenieType $ubezpieczenie)
    {
        $this->ubezpieczenie = $ubezpieczenie;

        return $this;
    }
}
