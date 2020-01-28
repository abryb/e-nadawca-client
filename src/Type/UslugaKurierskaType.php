<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing UslugaKurierskaType
 *
 * XSD Type: uslugaKurierskaType
 */
class UslugaKurierskaType extends PrzesylkaRejestrowanaType
{
    /**
     * @var string $zasadySpecjalne
     */
    private $zasadySpecjalne;

    /**
     * @var int $masa
     */
    private $masa;

    /**
     * @var int $wartosc
     */
    private $wartosc;

    /**
     * @var bool $ponadgabaryt
     */
    private $ponadgabaryt;

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
     * @var bool $ostroznie
     */
    private $ostroznie;

    /**
     * @var string $uiszczaOplate
     */
    private $uiszczaOplate;

    /**
     * @var string $termin
     */
    private $termin;

    /**
     * @var string $opakowanie
     */
    private $opakowanie;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    private $numerPrzesylkiKlienta;

    /**
     * @var string $numerTransakcjiOdbioru
     */
    private $numerTransakcjiOdbioru;

    /**
     * @var \Abryb\ENadawca\Type\PobranieType $pobranie
     */
    private $pobranie;

    /**
     * @var \Abryb\ENadawca\Type\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     */
    private $odbiorPrzesylkiOdNadawcy;

    /**
     * @var \Abryb\ENadawca\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    private $potwierdzenieDoreczenia;

    /**
     * @var \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    private $urzadWydaniaEPrzesylki;

    /**
     * @var \Abryb\ENadawca\Type\SubUslugaKurierskaType[] $subPrzesylka
     */
    private $subPrzesylka = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     */
    private $potwierdzenieOdbioru;

    /**
     * @var \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     */
    private $ubezpieczenie;

    /**
     * @var \Abryb\ENadawca\Type\ZwrotDokumentowKurierskaType $zwrotDokumentow
     */
    private $zwrotDokumentow;

    /**
     * @var \Abryb\ENadawca\Type\DoreczenieUslugaKurierskaType $doreczenie
     */
    private $doreczenie;

    /**
     * @var \Abryb\ENadawca\Type\EPOType $epo
     */
    private $epo;

    /**
     * Gets as zasadySpecjalne
     *
     * @return string
     */
    public function getZasadySpecjalne()
    {
        return $this->zasadySpecjalne;
    }

    /**
     * Sets a new zasadySpecjalne
     *
     * @param string $zasadySpecjalne
     *
     * @return self
     */
    public function setZasadySpecjalne($zasadySpecjalne)
    {
        $this->zasadySpecjalne = $zasadySpecjalne;

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
     * Gets as termin
     *
     * @return string
     */
    public function getTermin()
    {
        return $this->termin;
    }

    /**
     * Sets a new termin
     *
     * @param string $termin
     *
     * @return self
     */
    public function setTermin($termin)
    {
        $this->termin = $termin;

        return $this;
    }

    /**
     * Gets as opakowanie
     *
     * @return string
     */
    public function getOpakowanie()
    {
        return $this->opakowanie;
    }

    /**
     * Sets a new opakowanie
     *
     * @param string $opakowanie
     *
     * @return self
     */
    public function setOpakowanie($opakowanie)
    {
        $this->opakowanie = $opakowanie;

        return $this;
    }

    /**
     * Gets as numerPrzesylkiKlienta
     *
     * @return string
     */
    public function getNumerPrzesylkiKlienta()
    {
        return $this->numerPrzesylkiKlienta;
    }

    /**
     * Sets a new numerPrzesylkiKlienta
     *
     * @param string $numerPrzesylkiKlienta
     *
     * @return self
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;

        return $this;
    }

    /**
     * Gets as numerTransakcjiOdbioru
     *
     * @return string
     */
    public function getNumerTransakcjiOdbioru()
    {
        return $this->numerTransakcjiOdbioru;
    }

    /**
     * Sets a new numerTransakcjiOdbioru
     *
     * @param string $numerTransakcjiOdbioru
     *
     * @return self
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
    {
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;

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
     * Gets as urzadWydaniaEPrzesylki
     *
     * @return \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType
     */
    public function getUrzadWydaniaEPrzesylki()
    {
        return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * Sets a new urzadWydaniaEPrzesylki
     *
     * @param \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     *
     * @return self
     */
    public function setUrzadWydaniaEPrzesylki(UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki)
    {
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;

        return $this;
    }

    /**
     * Adds as subPrzesylka
     *
     * @param \Abryb\ENadawca\Type\SubUslugaKurierskaType $subPrzesylka
     *
     * @return self
     */
    public function addToSubPrzesylka(SubUslugaKurierskaType $subPrzesylka)
    {
        $this->subPrzesylka[] = $subPrzesylka;

        return $this;
    }

    /**
     * isset subPrzesylka
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSubPrzesylka($index)
    {
        return isset($this->subPrzesylka[$index]);
    }

    /**
     * unset subPrzesylka
     *
     * @param int|string $index
     */
    public function unsetSubPrzesylka($index)
    {
        unset($this->subPrzesylka[$index]);
    }

    /**
     * Gets as subPrzesylka
     *
     * @return \Abryb\ENadawca\Type\SubUslugaKurierskaType[]
     */
    public function getSubPrzesylka()
    {
        return $this->subPrzesylka;
    }

    /**
     * Sets a new subPrzesylka
     *
     * @param \Abryb\ENadawca\Type\SubUslugaKurierskaType[] $subPrzesylka
     *
     * @return self
     */
    public function setSubPrzesylka(array $subPrzesylka)
    {
        $this->subPrzesylka = $subPrzesylka;

        return $this;
    }

    /**
     * Gets as potwierdzenieOdbioru
     *
     * @return \Abryb\ENadawca\Type\PotwierdzenieOdbioruKurierskaType
     */
    public function getPotwierdzenieOdbioru()
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Sets a new potwierdzenieOdbioru
     *
     * @param \Abryb\ENadawca\Type\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     *
     * @return self
     */
    public function setPotwierdzenieOdbioru(PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru)
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;

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

    /**
     * Gets as zwrotDokumentow
     *
     * @return \Abryb\ENadawca\Type\ZwrotDokumentowKurierskaType
     */
    public function getZwrotDokumentow()
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Sets a new zwrotDokumentow
     *
     * @param \Abryb\ENadawca\Type\ZwrotDokumentowKurierskaType $zwrotDokumentow
     *
     * @return self
     */
    public function setZwrotDokumentow(ZwrotDokumentowKurierskaType $zwrotDokumentow)
    {
        $this->zwrotDokumentow = $zwrotDokumentow;

        return $this;
    }

    /**
     * Gets as doreczenie
     *
     * @return \Abryb\ENadawca\Type\DoreczenieUslugaKurierskaType
     */
    public function getDoreczenie()
    {
        return $this->doreczenie;
    }

    /**
     * Sets a new doreczenie
     *
     * @param \Abryb\ENadawca\Type\DoreczenieUslugaKurierskaType $doreczenie
     *
     * @return self
     */
    public function setDoreczenie(DoreczenieUslugaKurierskaType $doreczenie)
    {
        $this->doreczenie = $doreczenie;

        return $this;
    }

    /**
     * Gets as epo
     *
     * @return \Abryb\ENadawca\Type\EPOType
     */
    public function getEpo()
    {
        return $this->epo;
    }

    /**
     * Sets a new epo
     *
     * @param \Abryb\ENadawca\Type\EPOType $epo
     *
     * @return self
     */
    public function setEpo(EPOType $epo)
    {
        $this->epo = $epo;

        return $this;
    }
}
