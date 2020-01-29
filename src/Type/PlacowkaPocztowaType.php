<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PlacowkaPocztowaType
 *
 * XSD Type: placowkaPocztowaType
 */
class PlacowkaPocztowaType
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var string $prefixNazwy
     */
    protected $prefixNazwy;

    /**
     * @var string $nazwa
     */
    protected $nazwa;

    /**
     * @var string $wojewodztwo
     */
    protected $wojewodztwo;

    /**
     * @var string $powiat
     */
    protected $powiat;

    /**
     * @var string $miejsce
     */
    protected $miejsce;

    /**
     * @var string $kodPocztowy
     */
    protected $kodPocztowy;

    /**
     * @var string $miejscowosc
     */
    protected $miejscowosc;

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
     * Pole dedykowane do wykorzystania na nalepkach adresowych przy określaniu punktu odbioru
     *
     * @var string $nazwaWydruk
     */
    protected $nazwaWydruk;

    /**
     * @var bool $punktWydaniaEPrzesylki
     */
    protected $punktWydaniaEPrzesylki;

    /**
     * @var bool $powiadomienieSMS
     */
    protected $powiadomienieSMS;

    /**
     * @var bool $punktWydaniaPrzesylkiBiznesowejPlus
     */
    protected $punktWydaniaPrzesylkiBiznesowejPlus;

    /**
     * @var bool $punktWydaniaPrzesylkiBiznesowej
     */
    protected $punktWydaniaPrzesylkiBiznesowej;

    /**
     * @var string $siecPlacowek
     */
    protected $siecPlacowek;

    /**
     * @var string $idZPO
     */
    protected $idZPO;

    /**
     * @var \Abryb\ENadawca\Type\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     */
    protected $lokalizacjaGeograficzna;

    /**
     * Gets as id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as prefixNazwy
     *
     * @return string
     */
    public function getPrefixNazwy()
    {
        return $this->prefixNazwy;
    }

    /**
     * Sets a new prefixNazwy
     *
     * @param string $prefixNazwy
     *
     * @return self
     */
    public function setPrefixNazwy($prefixNazwy)
    {
        $this->prefixNazwy = $prefixNazwy;

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
     * Gets as wojewodztwo
     *
     * @return string
     */
    public function getWojewodztwo()
    {
        return $this->wojewodztwo;
    }

    /**
     * Sets a new wojewodztwo
     *
     * @param string $wojewodztwo
     *
     * @return self
     */
    public function setWojewodztwo($wojewodztwo)
    {
        $this->wojewodztwo = $wojewodztwo;

        return $this;
    }

    /**
     * Gets as powiat
     *
     * @return string
     */
    public function getPowiat()
    {
        return $this->powiat;
    }

    /**
     * Sets a new powiat
     *
     * @param string $powiat
     *
     * @return self
     */
    public function setPowiat($powiat)
    {
        $this->powiat = $powiat;

        return $this;
    }

    /**
     * Gets as miejsce
     *
     * @return string
     */
    public function getMiejsce()
    {
        return $this->miejsce;
    }

    /**
     * Sets a new miejsce
     *
     * @param string $miejsce
     *
     * @return self
     */
    public function setMiejsce($miejsce)
    {
        $this->miejsce = $miejsce;

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
     * Gets as nazwaWydruk
     *
     * Pole dedykowane do wykorzystania na nalepkach adresowych przy określaniu punktu odbioru
     *
     * @return string
     */
    public function getNazwaWydruk()
    {
        return $this->nazwaWydruk;
    }

    /**
     * Sets a new nazwaWydruk
     *
     * Pole dedykowane do wykorzystania na nalepkach adresowych przy określaniu punktu odbioru
     *
     * @param string $nazwaWydruk
     *
     * @return self
     */
    public function setNazwaWydruk($nazwaWydruk)
    {
        $this->nazwaWydruk = $nazwaWydruk;

        return $this;
    }

    /**
     * Gets as punktWydaniaEPrzesylki
     *
     * @return bool
     */
    public function getPunktWydaniaEPrzesylki()
    {
        return $this->punktWydaniaEPrzesylki;
    }

    /**
     * Sets a new punktWydaniaEPrzesylki
     *
     * @param bool $punktWydaniaEPrzesylki
     *
     * @return self
     */
    public function setPunktWydaniaEPrzesylki($punktWydaniaEPrzesylki)
    {
        $this->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;

        return $this;
    }

    /**
     * Gets as powiadomienieSMS
     *
     * @return bool
     */
    public function getPowiadomienieSMS()
    {
        return $this->powiadomienieSMS;
    }

    /**
     * Sets a new powiadomienieSMS
     *
     * @param bool $powiadomienieSMS
     *
     * @return self
     */
    public function setPowiadomienieSMS($powiadomienieSMS)
    {
        $this->powiadomienieSMS = $powiadomienieSMS;

        return $this;
    }

    /**
     * Gets as punktWydaniaPrzesylkiBiznesowejPlus
     *
     * @return bool
     */
    public function getPunktWydaniaPrzesylkiBiznesowejPlus()
    {
        return $this->punktWydaniaPrzesylkiBiznesowejPlus;
    }

    /**
     * Sets a new punktWydaniaPrzesylkiBiznesowejPlus
     *
     * @param bool $punktWydaniaPrzesylkiBiznesowejPlus
     *
     * @return self
     */
    public function setPunktWydaniaPrzesylkiBiznesowejPlus($punktWydaniaPrzesylkiBiznesowejPlus)
    {
        $this->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;

        return $this;
    }

    /**
     * Gets as punktWydaniaPrzesylkiBiznesowej
     *
     * @return bool
     */
    public function getPunktWydaniaPrzesylkiBiznesowej()
    {
        return $this->punktWydaniaPrzesylkiBiznesowej;
    }

    /**
     * Sets a new punktWydaniaPrzesylkiBiznesowej
     *
     * @param bool $punktWydaniaPrzesylkiBiznesowej
     *
     * @return self
     */
    public function setPunktWydaniaPrzesylkiBiznesowej($punktWydaniaPrzesylkiBiznesowej)
    {
        $this->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;

        return $this;
    }

    /**
     * Gets as siecPlacowek
     *
     * @return string
     */
    public function getSiecPlacowek()
    {
        return $this->siecPlacowek;
    }

    /**
     * Sets a new siecPlacowek
     *
     * @param string $siecPlacowek
     *
     * @return self
     */
    public function setSiecPlacowek($siecPlacowek)
    {
        $this->siecPlacowek = $siecPlacowek;

        return $this;
    }

    /**
     * Gets as idZPO
     *
     * @return string
     */
    public function getIdZPO()
    {
        return $this->idZPO;
    }

    /**
     * Sets a new idZPO
     *
     * @param string $idZPO
     *
     * @return self
     */
    public function setIdZPO($idZPO)
    {
        $this->idZPO = $idZPO;

        return $this;
    }

    /**
     * Gets as lokalizacjaGeograficzna
     *
     * @return \Abryb\ENadawca\Type\LokalizacjaGeograficznaType
     */
    public function getLokalizacjaGeograficzna()
    {
        return $this->lokalizacjaGeograficzna;
    }

    /**
     * Sets a new lokalizacjaGeograficzna
     *
     * @param \Abryb\ENadawca\Type\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     *
     * @return self
     */
    public function setLokalizacjaGeograficzna(LokalizacjaGeograficznaType $lokalizacjaGeograficzna)
    {
        $this->lokalizacjaGeograficzna = $lokalizacjaGeograficzna;

        return $this;
    }
}
