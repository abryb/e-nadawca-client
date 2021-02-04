<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaBiznesowaType
 *
 * XSD Type: przesylkaBiznesowaType
 */
class PrzesylkaBiznesowaType extends PrzesylkaRejestrowanaType
{
    /**
     * @var string $zasadySpecjalne
     */
    protected $zasadySpecjalne;

    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var string $gabaryt
     */
    protected $gabaryt;

    /**
     * @var int $wartosc
     */
    protected $wartosc;

    /**
     * @var bool $ostroznie
     */
    protected $ostroznie;

    /**
     * @var string $numerTransakcjiOdbioru
     */
    protected $numerTransakcjiOdbioru;

    /**
     * @var \Abryb\ENadawca\Type\PobranieType $pobranie
     */
    protected $pobranie;

    /**
     * @var \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki;

    /**
     * @var \Abryb\ENadawca\Type\SubPrzesylkaBiznesowaType[] $subPrzesylka
     */
    protected $subPrzesylka = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie;

    /**
     * @var \Abryb\ENadawca\Type\EPOType $epo
     */
    protected $epo;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $adresDlaZwrotu
     */
    protected $adresDlaZwrotu;

    /**
     * @var bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    protected $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;

    /**
     * @var \Abryb\ENadawca\Type\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     */
    protected $potwierdzenieOdbioru;

    /**
     * @var \Abryb\ENadawca\Type\DoreczenieBiznesowaType $doreczenie
     */
    protected $doreczenie;

    /**
     * @var \Abryb\ENadawca\Type\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     */
    protected $zwrotDokumentow;

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
     * Gets as gabaryt
     *
     * @return string
     */
    public function getGabaryt()
    {
        return $this->gabaryt;
    }

    /**
     * Sets a new gabaryt
     *
     * @param string $gabaryt
     *
     * @return self
     */
    public function setGabaryt($gabaryt)
    {
        $this->gabaryt = $gabaryt;

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
     * @param \Abryb\ENadawca\Type\SubPrzesylkaBiznesowaType $subPrzesylka
     *
     * @return self
     */
    public function addToSubPrzesylka(SubPrzesylkaBiznesowaType $subPrzesylka)
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
     * @return \Abryb\ENadawca\Type\SubPrzesylkaBiznesowaType[]
     */
    public function getSubPrzesylka()
    {
        return $this->subPrzesylka;
    }

    /**
     * Sets a new subPrzesylka
     *
     * @param \Abryb\ENadawca\Type\SubPrzesylkaBiznesowaType[] $subPrzesylka
     *
     * @return self
     */
    public function setSubPrzesylka(array $subPrzesylka)
    {
        $this->subPrzesylka = $subPrzesylka;

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

    /**
     * Gets as adresDlaZwrotu
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getAdresDlaZwrotu()
    {
        return $this->adresDlaZwrotu;
    }

    /**
     * Sets a new adresDlaZwrotu
     *
     * @param \Abryb\ENadawca\Type\AdresType $adresDlaZwrotu
     *
     * @return self
     */
    public function setAdresDlaZwrotu(AdresType $adresDlaZwrotu)
    {
        $this->adresDlaZwrotu = $adresDlaZwrotu;

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
     * Gets as potwierdzenieOdbioru
     *
     * @return \Abryb\ENadawca\Type\PotwierdzenieOdbioruBiznesowaType
     */
    public function getPotwierdzenieOdbioru()
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Sets a new potwierdzenieOdbioru
     *
     * @param \Abryb\ENadawca\Type\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     *
     * @return self
     */
    public function setPotwierdzenieOdbioru(PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru)
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;

        return $this;
    }

    /**
     * Gets as doreczenie
     *
     * @return \Abryb\ENadawca\Type\DoreczenieBiznesowaType
     */
    public function getDoreczenie()
    {
        return $this->doreczenie;
    }

    /**
     * Sets a new doreczenie
     *
     * @param \Abryb\ENadawca\Type\DoreczenieBiznesowaType $doreczenie
     *
     * @return self
     */
    public function setDoreczenie(DoreczenieBiznesowaType $doreczenie)
    {
        $this->doreczenie = $doreczenie;

        return $this;
    }

    /**
     * Gets as zwrotDokumentow
     *
     * @return \Abryb\ENadawca\Type\ZwrotDokumentowBiznesowaType
     */
    public function getZwrotDokumentow()
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Sets a new zwrotDokumentow
     *
     * @param \Abryb\ENadawca\Type\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     *
     * @return self
     */
    public function setZwrotDokumentow(ZwrotDokumentowBiznesowaType $zwrotDokumentow)
    {
        $this->zwrotDokumentow = $zwrotDokumentow;

        return $this;
    }
}
