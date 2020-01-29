<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaPaletowaType
 *
 * XSD Type: przesylkaPaletowaType
 */
class PrzesylkaPaletowaType extends PrzesylkaRejestrowanaType
{
    /**
     * @var string $zawartosc
     */
    protected $zawartosc;

    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var \DateTime $dataZaladunku
     */
    protected $dataZaladunku;

    /**
     * @var \DateTime $dataDostawy
     */
    protected $dataDostawy;

    /**
     * @var int $wartosc
     */
    protected $wartosc;

    /**
     * @var int $iloscZwracanychPaletEUR
     */
    protected $iloscZwracanychPaletEUR;

    /**
     * @var string $zalaczonaFV
     */
    protected $zalaczonaFV;

    /**
     * @var string $zalaczonyWZ
     */
    protected $zalaczonyWZ;

    /**
     * @var string $zalaczoneInne
     */
    protected $zalaczoneInne;

    /**
     * @var string $zwracanaFV
     */
    protected $zwracanaFV;

    /**
     * @var string $zwracanyWZ
     */
    protected $zwracanyWZ;

    /**
     * @var string $zwracaneInne
     */
    protected $zwracaneInne;

    /**
     * @var string $powiadomienieNadawcy
     */
    protected $powiadomienieNadawcy;

    /**
     * @var string $powiadomienieOdbiorcy
     */
    protected $powiadomienieOdbiorcy;

    /**
     * @var bool $dostawaWSobote
     */
    protected $dostawaWSobote;

    /**
     * @var bool $przygotowanieDokumentowPrzewozowych
     */
    protected $przygotowanieDokumentowPrzewozowych;

    /**
     * @var bool $dostawaSamochodemDedykowanym
     */
    protected $dostawaSamochodemDedykowanym;

    /**
     * @var bool $zmianaDanychAdresowych
     */
    protected $zmianaDanychAdresowych;

    /**
     * @var bool $ustalenieTerminuDostawy
     */
    protected $ustalenieTerminuDostawy;

    /**
     * @var bool $samochodZWinda
     */
    protected $samochodZWinda;

    /**
     * @var bool $zabranieOpakowania
     */
    protected $zabranieOpakowania;

    /**
     * @var bool $wniesienie
     */
    protected $wniesienie;

    /**
     * @var bool $awizoSMS
     */
    protected $awizoSMS;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $miejsceOdbioru
     */
    protected $miejsceOdbioru;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $miejsceDoreczenia
     */
    protected $miejsceDoreczenia;

    /**
     * @var \Abryb\ENadawca\Type\PaletaType $paleta
     */
    protected $paleta;

    /**
     * @var \Abryb\ENadawca\Type\PlatnikType $platnik
     */
    protected $platnik;

    /**
     * @var \Abryb\ENadawca\Type\PobranieType $pobranie
     */
    protected $pobranie;

    /**
     * @var \Abryb\ENadawca\Type\SubPrzesylkaPaletowaType[] $subPaleta
     */
    protected $subPaleta = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\DaneSentType[] $daneSent
     */
    protected $daneSent = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\AwizacjaType $awizacja
     */
    protected $awizacja;

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
     * Gets as dataZaladunku
     *
     * @return \DateTime
     */
    public function getDataZaladunku()
    {
        return $this->dataZaladunku;
    }

    /**
     * Sets a new dataZaladunku
     *
     * @return self
     */
    public function setDataZaladunku(\DateTime $dataZaladunku)
    {
        $this->dataZaladunku = $dataZaladunku;

        return $this;
    }

    /**
     * Gets as dataDostawy
     *
     * @return \DateTime
     */
    public function getDataDostawy()
    {
        return $this->dataDostawy;
    }

    /**
     * Sets a new dataDostawy
     *
     * @return self
     */
    public function setDataDostawy(\DateTime $dataDostawy)
    {
        $this->dataDostawy = $dataDostawy;

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
     * Gets as iloscZwracanychPaletEUR
     *
     * @return int
     */
    public function getIloscZwracanychPaletEUR()
    {
        return $this->iloscZwracanychPaletEUR;
    }

    /**
     * Sets a new iloscZwracanychPaletEUR
     *
     * @param int $iloscZwracanychPaletEUR
     *
     * @return self
     */
    public function setIloscZwracanychPaletEUR($iloscZwracanychPaletEUR)
    {
        $this->iloscZwracanychPaletEUR = $iloscZwracanychPaletEUR;

        return $this;
    }

    /**
     * Gets as zalaczonaFV
     *
     * @return string
     */
    public function getZalaczonaFV()
    {
        return $this->zalaczonaFV;
    }

    /**
     * Sets a new zalaczonaFV
     *
     * @param string $zalaczonaFV
     *
     * @return self
     */
    public function setZalaczonaFV($zalaczonaFV)
    {
        $this->zalaczonaFV = $zalaczonaFV;

        return $this;
    }

    /**
     * Gets as zalaczonyWZ
     *
     * @return string
     */
    public function getZalaczonyWZ()
    {
        return $this->zalaczonyWZ;
    }

    /**
     * Sets a new zalaczonyWZ
     *
     * @param string $zalaczonyWZ
     *
     * @return self
     */
    public function setZalaczonyWZ($zalaczonyWZ)
    {
        $this->zalaczonyWZ = $zalaczonyWZ;

        return $this;
    }

    /**
     * Gets as zalaczoneInne
     *
     * @return string
     */
    public function getZalaczoneInne()
    {
        return $this->zalaczoneInne;
    }

    /**
     * Sets a new zalaczoneInne
     *
     * @param string $zalaczoneInne
     *
     * @return self
     */
    public function setZalaczoneInne($zalaczoneInne)
    {
        $this->zalaczoneInne = $zalaczoneInne;

        return $this;
    }

    /**
     * Gets as zwracanaFV
     *
     * @return string
     */
    public function getZwracanaFV()
    {
        return $this->zwracanaFV;
    }

    /**
     * Sets a new zwracanaFV
     *
     * @param string $zwracanaFV
     *
     * @return self
     */
    public function setZwracanaFV($zwracanaFV)
    {
        $this->zwracanaFV = $zwracanaFV;

        return $this;
    }

    /**
     * Gets as zwracanyWZ
     *
     * @return string
     */
    public function getZwracanyWZ()
    {
        return $this->zwracanyWZ;
    }

    /**
     * Sets a new zwracanyWZ
     *
     * @param string $zwracanyWZ
     *
     * @return self
     */
    public function setZwracanyWZ($zwracanyWZ)
    {
        $this->zwracanyWZ = $zwracanyWZ;

        return $this;
    }

    /**
     * Gets as zwracaneInne
     *
     * @return string
     */
    public function getZwracaneInne()
    {
        return $this->zwracaneInne;
    }

    /**
     * Sets a new zwracaneInne
     *
     * @param string $zwracaneInne
     *
     * @return self
     */
    public function setZwracaneInne($zwracaneInne)
    {
        $this->zwracaneInne = $zwracaneInne;

        return $this;
    }

    /**
     * Gets as powiadomienieNadawcy
     *
     * @return string
     */
    public function getPowiadomienieNadawcy()
    {
        return $this->powiadomienieNadawcy;
    }

    /**
     * Sets a new powiadomienieNadawcy
     *
     * @param string $powiadomienieNadawcy
     *
     * @return self
     */
    public function setPowiadomienieNadawcy($powiadomienieNadawcy)
    {
        $this->powiadomienieNadawcy = $powiadomienieNadawcy;

        return $this;
    }

    /**
     * Gets as powiadomienieOdbiorcy
     *
     * @return string
     */
    public function getPowiadomienieOdbiorcy()
    {
        return $this->powiadomienieOdbiorcy;
    }

    /**
     * Sets a new powiadomienieOdbiorcy
     *
     * @param string $powiadomienieOdbiorcy
     *
     * @return self
     */
    public function setPowiadomienieOdbiorcy($powiadomienieOdbiorcy)
    {
        $this->powiadomienieOdbiorcy = $powiadomienieOdbiorcy;

        return $this;
    }

    /**
     * Gets as dostawaWSobote
     *
     * @return bool
     */
    public function getDostawaWSobote()
    {
        return $this->dostawaWSobote;
    }

    /**
     * Sets a new dostawaWSobote
     *
     * @param bool $dostawaWSobote
     *
     * @return self
     */
    public function setDostawaWSobote($dostawaWSobote)
    {
        $this->dostawaWSobote = $dostawaWSobote;

        return $this;
    }

    /**
     * Gets as przygotowanieDokumentowPrzewozowych
     *
     * @return bool
     */
    public function getPrzygotowanieDokumentowPrzewozowych()
    {
        return $this->przygotowanieDokumentowPrzewozowych;
    }

    /**
     * Sets a new przygotowanieDokumentowPrzewozowych
     *
     * @param bool $przygotowanieDokumentowPrzewozowych
     *
     * @return self
     */
    public function setPrzygotowanieDokumentowPrzewozowych($przygotowanieDokumentowPrzewozowych)
    {
        $this->przygotowanieDokumentowPrzewozowych = $przygotowanieDokumentowPrzewozowych;

        return $this;
    }

    /**
     * Gets as dostawaSamochodemDedykowanym
     *
     * @return bool
     */
    public function getDostawaSamochodemDedykowanym()
    {
        return $this->dostawaSamochodemDedykowanym;
    }

    /**
     * Sets a new dostawaSamochodemDedykowanym
     *
     * @param bool $dostawaSamochodemDedykowanym
     *
     * @return self
     */
    public function setDostawaSamochodemDedykowanym($dostawaSamochodemDedykowanym)
    {
        $this->dostawaSamochodemDedykowanym = $dostawaSamochodemDedykowanym;

        return $this;
    }

    /**
     * Gets as zmianaDanychAdresowych
     *
     * @return bool
     */
    public function getZmianaDanychAdresowych()
    {
        return $this->zmianaDanychAdresowych;
    }

    /**
     * Sets a new zmianaDanychAdresowych
     *
     * @param bool $zmianaDanychAdresowych
     *
     * @return self
     */
    public function setZmianaDanychAdresowych($zmianaDanychAdresowych)
    {
        $this->zmianaDanychAdresowych = $zmianaDanychAdresowych;

        return $this;
    }

    /**
     * Gets as ustalenieTerminuDostawy
     *
     * @return bool
     */
    public function getUstalenieTerminuDostawy()
    {
        return $this->ustalenieTerminuDostawy;
    }

    /**
     * Sets a new ustalenieTerminuDostawy
     *
     * @param bool $ustalenieTerminuDostawy
     *
     * @return self
     */
    public function setUstalenieTerminuDostawy($ustalenieTerminuDostawy)
    {
        $this->ustalenieTerminuDostawy = $ustalenieTerminuDostawy;

        return $this;
    }

    /**
     * Gets as samochodZWinda
     *
     * @return bool
     */
    public function getSamochodZWinda()
    {
        return $this->samochodZWinda;
    }

    /**
     * Sets a new samochodZWinda
     *
     * @param bool $samochodZWinda
     *
     * @return self
     */
    public function setSamochodZWinda($samochodZWinda)
    {
        $this->samochodZWinda = $samochodZWinda;

        return $this;
    }

    /**
     * Gets as zabranieOpakowania
     *
     * @return bool
     */
    public function getZabranieOpakowania()
    {
        return $this->zabranieOpakowania;
    }

    /**
     * Sets a new zabranieOpakowania
     *
     * @param bool $zabranieOpakowania
     *
     * @return self
     */
    public function setZabranieOpakowania($zabranieOpakowania)
    {
        $this->zabranieOpakowania = $zabranieOpakowania;

        return $this;
    }

    /**
     * Gets as wniesienie
     *
     * @return bool
     */
    public function getWniesienie()
    {
        return $this->wniesienie;
    }

    /**
     * Sets a new wniesienie
     *
     * @param bool $wniesienie
     *
     * @return self
     */
    public function setWniesienie($wniesienie)
    {
        $this->wniesienie = $wniesienie;

        return $this;
    }

    /**
     * Gets as awizoSMS
     *
     * @return bool
     */
    public function getAwizoSMS()
    {
        return $this->awizoSMS;
    }

    /**
     * Sets a new awizoSMS
     *
     * @param bool $awizoSMS
     *
     * @return self
     */
    public function setAwizoSMS($awizoSMS)
    {
        $this->awizoSMS = $awizoSMS;

        return $this;
    }

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
     * Gets as miejsceDoreczenia
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getMiejsceDoreczenia()
    {
        return $this->miejsceDoreczenia;
    }

    /**
     * Sets a new miejsceDoreczenia
     *
     * @param \Abryb\ENadawca\Type\AdresType $miejsceDoreczenia
     *
     * @return self
     */
    public function setMiejsceDoreczenia(AdresType $miejsceDoreczenia)
    {
        $this->miejsceDoreczenia = $miejsceDoreczenia;

        return $this;
    }

    /**
     * Gets as paleta
     *
     * @return \Abryb\ENadawca\Type\PaletaType
     */
    public function getPaleta()
    {
        return $this->paleta;
    }

    /**
     * Sets a new paleta
     *
     * @param \Abryb\ENadawca\Type\PaletaType $paleta
     *
     * @return self
     */
    public function setPaleta(PaletaType $paleta)
    {
        $this->paleta = $paleta;

        return $this;
    }

    /**
     * Gets as platnik
     *
     * @return \Abryb\ENadawca\Type\PlatnikType
     */
    public function getPlatnik()
    {
        return $this->platnik;
    }

    /**
     * Sets a new platnik
     *
     * @param \Abryb\ENadawca\Type\PlatnikType $platnik
     *
     * @return self
     */
    public function setPlatnik(PlatnikType $platnik)
    {
        $this->platnik = $platnik;

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
     * Adds as subPaleta
     *
     * @param \Abryb\ENadawca\Type\SubPrzesylkaPaletowaType $subPaleta
     *
     * @return self
     */
    public function addToSubPaleta(SubPrzesylkaPaletowaType $subPaleta)
    {
        $this->subPaleta[] = $subPaleta;

        return $this;
    }

    /**
     * isset subPaleta
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSubPaleta($index)
    {
        return isset($this->subPaleta[$index]);
    }

    /**
     * unset subPaleta
     *
     * @param int|string $index
     */
    public function unsetSubPaleta($index)
    {
        unset($this->subPaleta[$index]);
    }

    /**
     * Gets as subPaleta
     *
     * @return \Abryb\ENadawca\Type\SubPrzesylkaPaletowaType[]
     */
    public function getSubPaleta()
    {
        return $this->subPaleta;
    }

    /**
     * Sets a new subPaleta
     *
     * @param \Abryb\ENadawca\Type\SubPrzesylkaPaletowaType[] $subPaleta
     *
     * @return self
     */
    public function setSubPaleta(array $subPaleta)
    {
        $this->subPaleta = $subPaleta;

        return $this;
    }

    /**
     * Adds as daneSent
     *
     * @param \Abryb\ENadawca\Type\DaneSentType $daneSent
     *
     * @return self
     */
    public function addToDaneSent(DaneSentType $daneSent)
    {
        $this->daneSent[] = $daneSent;

        return $this;
    }

    /**
     * isset daneSent
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDaneSent($index)
    {
        return isset($this->daneSent[$index]);
    }

    /**
     * unset daneSent
     *
     * @param int|string $index
     */
    public function unsetDaneSent($index)
    {
        unset($this->daneSent[$index]);
    }

    /**
     * Gets as daneSent
     *
     * @return \Abryb\ENadawca\Type\DaneSentType[]
     */
    public function getDaneSent()
    {
        return $this->daneSent;
    }

    /**
     * Sets a new daneSent
     *
     * @param \Abryb\ENadawca\Type\DaneSentType[] $daneSent
     *
     * @return self
     */
    public function setDaneSent(array $daneSent)
    {
        $this->daneSent = $daneSent;

        return $this;
    }

    /**
     * Gets as awizacja
     *
     * @return \Abryb\ENadawca\Type\AwizacjaType
     */
    public function getAwizacja()
    {
        return $this->awizacja;
    }

    /**
     * Sets a new awizacja
     *
     * @param \Abryb\ENadawca\Type\AwizacjaType $awizacja
     *
     * @return self
     */
    public function setAwizacja(AwizacjaType $awizacja)
    {
        $this->awizacja = $awizacja;

        return $this;
    }
}
