<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing DeklaracjaCelna2Type
 *
 * XSD Type: deklaracjaCelna2Type
 */
class DeklaracjaCelna2Type
{
    /**
     * @var string $rodzaj
     */
    protected $rodzaj;

    /**
     * @var string $zawartoscPrzesylki
     */
    protected $zawartoscPrzesylki;

    /**
     * @var \Abryb\ENadawca\Type\DokumentyTowarzyszaceType[] $dokumentyTowarzyszace
     */
    protected $dokumentyTowarzyszace = [
    ];

    /**
     * @var string $wyjasnienie
     */
    protected $wyjasnienie;

    /**
     * @var string $oplatyPocztowe
     */
    protected $oplatyPocztowe;

    /**
     * @var string $uwagi
     */
    protected $uwagi;

    /**
     * @var string $numerReferencyjnyImportera
     */
    protected $numerReferencyjnyImportera;

    /**
     * @var string $numerTelefonuImportera
     */
    protected $numerTelefonuImportera;

    /**
     * Kod ISO waluty w której wyrażone są wartości pozycji podanych w elemencie szczegolyZawartosciPrzesylki
     *
     * @var string $walutaKodISO
     */
    protected $walutaKodISO;

    /**
     * @var \Abryb\ENadawca\Type\SzczegolyZawartosciPrzesylkiZagranicznejType[] $szczegolyZawartosciPrzesylki
     */
    protected $szczegolyZawartosciPrzesylki = [
    ];

    /**
     * @var string $numerReferencyjnyCelny
     */
    protected $numerReferencyjnyCelny;

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
     * Gets as zawartoscPrzesylki
     *
     * @return string
     */
    public function getZawartoscPrzesylki()
    {
        return $this->zawartoscPrzesylki;
    }

    /**
     * Sets a new zawartoscPrzesylki
     *
     * @param string $zawartoscPrzesylki
     *
     * @return self
     */
    public function setZawartoscPrzesylki($zawartoscPrzesylki)
    {
        $this->zawartoscPrzesylki = $zawartoscPrzesylki;

        return $this;
    }

    /**
     * Adds as dokumentyTowarzyszace
     *
     * @param \Abryb\ENadawca\Type\DokumentyTowarzyszaceType $dokumentyTowarzyszace
     *
     * @return self
     */
    public function addToDokumentyTowarzyszace(DokumentyTowarzyszaceType $dokumentyTowarzyszace)
    {
        $this->dokumentyTowarzyszace[] = $dokumentyTowarzyszace;

        return $this;
    }

    /**
     * isset dokumentyTowarzyszace
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDokumentyTowarzyszace($index)
    {
        return isset($this->dokumentyTowarzyszace[$index]);
    }

    /**
     * unset dokumentyTowarzyszace
     *
     * @param int|string $index
     */
    public function unsetDokumentyTowarzyszace($index)
    {
        unset($this->dokumentyTowarzyszace[$index]);
    }

    /**
     * Gets as dokumentyTowarzyszace
     *
     * @return \Abryb\ENadawca\Type\DokumentyTowarzyszaceType[]
     */
    public function getDokumentyTowarzyszace()
    {
        return $this->dokumentyTowarzyszace;
    }

    /**
     * Sets a new dokumentyTowarzyszace
     *
     * @param \Abryb\ENadawca\Type\DokumentyTowarzyszaceType[] $dokumentyTowarzyszace
     *
     * @return self
     */
    public function setDokumentyTowarzyszace(array $dokumentyTowarzyszace)
    {
        $this->dokumentyTowarzyszace = $dokumentyTowarzyszace;

        return $this;
    }

    /**
     * Gets as wyjasnienie
     *
     * @return string
     */
    public function getWyjasnienie()
    {
        return $this->wyjasnienie;
    }

    /**
     * Sets a new wyjasnienie
     *
     * @param string $wyjasnienie
     *
     * @return self
     */
    public function setWyjasnienie($wyjasnienie)
    {
        $this->wyjasnienie = $wyjasnienie;

        return $this;
    }

    /**
     * Gets as oplatyPocztowe
     *
     * @return string
     */
    public function getOplatyPocztowe()
    {
        return $this->oplatyPocztowe;
    }

    /**
     * Sets a new oplatyPocztowe
     *
     * @param string $oplatyPocztowe
     *
     * @return self
     */
    public function setOplatyPocztowe($oplatyPocztowe)
    {
        $this->oplatyPocztowe = $oplatyPocztowe;

        return $this;
    }

    /**
     * Gets as uwagi
     *
     * @return string
     */
    public function getUwagi()
    {
        return $this->uwagi;
    }

    /**
     * Sets a new uwagi
     *
     * @param string $uwagi
     *
     * @return self
     */
    public function setUwagi($uwagi)
    {
        $this->uwagi = $uwagi;

        return $this;
    }

    /**
     * Gets as numerReferencyjnyImportera
     *
     * @return string
     */
    public function getNumerReferencyjnyImportera()
    {
        return $this->numerReferencyjnyImportera;
    }

    /**
     * Sets a new numerReferencyjnyImportera
     *
     * @param string $numerReferencyjnyImportera
     *
     * @return self
     */
    public function setNumerReferencyjnyImportera($numerReferencyjnyImportera)
    {
        $this->numerReferencyjnyImportera = $numerReferencyjnyImportera;

        return $this;
    }

    /**
     * Gets as numerTelefonuImportera
     *
     * @return string
     */
    public function getNumerTelefonuImportera()
    {
        return $this->numerTelefonuImportera;
    }

    /**
     * Sets a new numerTelefonuImportera
     *
     * @param string $numerTelefonuImportera
     *
     * @return self
     */
    public function setNumerTelefonuImportera($numerTelefonuImportera)
    {
        $this->numerTelefonuImportera = $numerTelefonuImportera;

        return $this;
    }

    /**
     * Gets as walutaKodISO
     *
     * Kod ISO waluty w której wyrażone są wartości pozycji podanych w elemencie szczegolyZawartosciPrzesylki
     *
     * @return string
     */
    public function getWalutaKodISO()
    {
        return $this->walutaKodISO;
    }

    /**
     * Sets a new walutaKodISO
     *
     * Kod ISO waluty w której wyrażone są wartości pozycji podanych w elemencie szczegolyZawartosciPrzesylki
     *
     * @param string $walutaKodISO
     *
     * @return self
     */
    public function setWalutaKodISO($walutaKodISO)
    {
        $this->walutaKodISO = $walutaKodISO;

        return $this;
    }

    /**
     * Adds as szczegolyZawartosciPrzesylki
     *
     * @param \Abryb\ENadawca\Type\SzczegolyZawartosciPrzesylkiZagranicznejType $szczegolyZawartosciPrzesylki
     *
     * @return self
     */
    public function addToSzczegolyZawartosciPrzesylki(SzczegolyZawartosciPrzesylkiZagranicznejType $szczegolyZawartosciPrzesylki)
    {
        $this->szczegolyZawartosciPrzesylki[] = $szczegolyZawartosciPrzesylki;

        return $this;
    }

    /**
     * isset szczegolyZawartosciPrzesylki
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSzczegolyZawartosciPrzesylki($index)
    {
        return isset($this->szczegolyZawartosciPrzesylki[$index]);
    }

    /**
     * unset szczegolyZawartosciPrzesylki
     *
     * @param int|string $index
     */
    public function unsetSzczegolyZawartosciPrzesylki($index)
    {
        unset($this->szczegolyZawartosciPrzesylki[$index]);
    }

    /**
     * Gets as szczegolyZawartosciPrzesylki
     *
     * @return \Abryb\ENadawca\Type\SzczegolyZawartosciPrzesylkiZagranicznejType[]
     */
    public function getSzczegolyZawartosciPrzesylki()
    {
        return $this->szczegolyZawartosciPrzesylki;
    }

    /**
     * Sets a new szczegolyZawartosciPrzesylki
     *
     * @param \Abryb\ENadawca\Type\SzczegolyZawartosciPrzesylkiZagranicznejType[] $szczegolyZawartosciPrzesylki
     *
     * @return self
     */
    public function setSzczegolyZawartosciPrzesylki(array $szczegolyZawartosciPrzesylki)
    {
        $this->szczegolyZawartosciPrzesylki = $szczegolyZawartosciPrzesylki;

        return $this;
    }

    /**
     * Gets as numerReferencyjnyCelny
     *
     * @return string
     */
    public function getNumerReferencyjnyCelny()
    {
        return $this->numerReferencyjnyCelny;
    }

    /**
     * Sets a new numerReferencyjnyCelny
     *
     * @param string $numerReferencyjnyCelny
     *
     * @return self
     */
    public function setNumerReferencyjnyCelny($numerReferencyjnyCelny)
    {
        $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;

        return $this;
    }
}
