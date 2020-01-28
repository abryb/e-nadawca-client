<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing EPrzesylkaType
 *
 * XSD Type: ePrzesylkaType
 */
class EPrzesylkaType extends PrzesylkaRejestrowanaType
{
    /**
     * @var int $masa
     */
    private $masa;

    /**
     * @var string $eSposobPowiadomieniaAdresata
     */
    private $eSposobPowiadomieniaAdresata;

    /**
     * @var string $eSposobPowiadomieniaNadawcy
     */
    private $eSposobPowiadomieniaNadawcy;

    /**
     * @var string $eKontaktAdresata
     */
    private $eKontaktAdresata;

    /**
     * @var string $eKontaktNadawcy
     */
    private $eKontaktNadawcy;

    /**
     * @var bool $ostroznie
     */
    private $ostroznie;

    /**
     * @var int $wartosc
     */
    private $wartosc;

    /**
     * @var \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    private $urzadWydaniaEPrzesylki;

    /**
     * @var \Abryb\ENadawca\Type\PobranieType $pobranie
     */
    private $pobranie;

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
     * Gets as eSposobPowiadomieniaAdresata
     *
     * @return string
     */
    public function getESposobPowiadomieniaAdresata()
    {
        return $this->eSposobPowiadomieniaAdresata;
    }

    /**
     * Sets a new eSposobPowiadomieniaAdresata
     *
     * @param string $eSposobPowiadomieniaAdresata
     *
     * @return self
     */
    public function setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata)
    {
        $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;

        return $this;
    }

    /**
     * Gets as eSposobPowiadomieniaNadawcy
     *
     * @return string
     */
    public function getESposobPowiadomieniaNadawcy()
    {
        return $this->eSposobPowiadomieniaNadawcy;
    }

    /**
     * Sets a new eSposobPowiadomieniaNadawcy
     *
     * @param string $eSposobPowiadomieniaNadawcy
     *
     * @return self
     */
    public function setESposobPowiadomieniaNadawcy($eSposobPowiadomieniaNadawcy)
    {
        $this->eSposobPowiadomieniaNadawcy = $eSposobPowiadomieniaNadawcy;

        return $this;
    }

    /**
     * Gets as eKontaktAdresata
     *
     * @return string
     */
    public function getEKontaktAdresata()
    {
        return $this->eKontaktAdresata;
    }

    /**
     * Sets a new eKontaktAdresata
     *
     * @param string $eKontaktAdresata
     *
     * @return self
     */
    public function setEKontaktAdresata($eKontaktAdresata)
    {
        $this->eKontaktAdresata = $eKontaktAdresata;

        return $this;
    }

    /**
     * Gets as eKontaktNadawcy
     *
     * @return string
     */
    public function getEKontaktNadawcy()
    {
        return $this->eKontaktNadawcy;
    }

    /**
     * Sets a new eKontaktNadawcy
     *
     * @param string $eKontaktNadawcy
     *
     * @return self
     */
    public function setEKontaktNadawcy($eKontaktNadawcy)
    {
        $this->eKontaktNadawcy = $eKontaktNadawcy;

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
}
