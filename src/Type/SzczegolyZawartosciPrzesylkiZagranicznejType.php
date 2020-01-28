<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing SzczegolyZawartosciPrzesylkiZagranicznejType
 *
 * XSD Type: SzczegolyZawartosciPrzesylkiZagranicznejType
 */
class SzczegolyZawartosciPrzesylkiZagranicznejType
{
    /**
     * @var string $okreslenieZawartosci
     */
    private $okreslenieZawartosci;

    /**
     * @var int $ilosc
     */
    private $ilosc;

    /**
     * @var int $masaNetto
     */
    private $masaNetto;

    /**
     * @var float $wartosc
     */
    private $wartosc;

    /**
     * Numer taryfy Zharmonizowanego Systemu (HS)
     *
     * @var string $numerTaryfyHs
     */
    private $numerTaryfyHs;

    /**
     * Kod ISO (alfa-2) kraju pochodzenia opisywanej zawartości
     *
     * @var string $krajPochodzeniaKodAlfa2
     */
    private $krajPochodzeniaKodAlfa2;

    /**
     * Gets as okreslenieZawartosci
     *
     * @return string
     */
    public function getOkreslenieZawartosci()
    {
        return $this->okreslenieZawartosci;
    }

    /**
     * Sets a new okreslenieZawartosci
     *
     * @param string $okreslenieZawartosci
     *
     * @return self
     */
    public function setOkreslenieZawartosci($okreslenieZawartosci)
    {
        $this->okreslenieZawartosci = $okreslenieZawartosci;

        return $this;
    }

    /**
     * Gets as ilosc
     *
     * @return int
     */
    public function getIlosc()
    {
        return $this->ilosc;
    }

    /**
     * Sets a new ilosc
     *
     * @param int $ilosc
     *
     * @return self
     */
    public function setIlosc($ilosc)
    {
        $this->ilosc = $ilosc;

        return $this;
    }

    /**
     * Gets as masaNetto
     *
     * @return int
     */
    public function getMasaNetto()
    {
        return $this->masaNetto;
    }

    /**
     * Sets a new masaNetto
     *
     * @param int $masaNetto
     *
     * @return self
     */
    public function setMasaNetto($masaNetto)
    {
        $this->masaNetto = $masaNetto;

        return $this;
    }

    /**
     * Gets as wartosc
     *
     * @return float
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Sets a new wartosc
     *
     * @param float $wartosc
     *
     * @return self
     */
    public function setWartosc($wartosc)
    {
        $this->wartosc = $wartosc;

        return $this;
    }

    /**
     * Gets as numerTaryfyHs
     *
     * Numer taryfy Zharmonizowanego Systemu (HS)
     *
     * @return string
     */
    public function getNumerTaryfyHs()
    {
        return $this->numerTaryfyHs;
    }

    /**
     * Sets a new numerTaryfyHs
     *
     * Numer taryfy Zharmonizowanego Systemu (HS)
     *
     * @param string $numerTaryfyHs
     *
     * @return self
     */
    public function setNumerTaryfyHs($numerTaryfyHs)
    {
        $this->numerTaryfyHs = $numerTaryfyHs;

        return $this;
    }

    /**
     * Gets as krajPochodzeniaKodAlfa2
     *
     * Kod ISO (alfa-2) kraju pochodzenia opisywanej zawartości
     *
     * @return string
     */
    public function getKrajPochodzeniaKodAlfa2()
    {
        return $this->krajPochodzeniaKodAlfa2;
    }

    /**
     * Sets a new krajPochodzeniaKodAlfa2
     *
     * Kod ISO (alfa-2) kraju pochodzenia opisywanej zawartości
     *
     * @param string $krajPochodzeniaKodAlfa2
     *
     * @return self
     */
    public function setKrajPochodzeniaKodAlfa2($krajPochodzeniaKodAlfa2)
    {
        $this->krajPochodzeniaKodAlfa2 = $krajPochodzeniaKodAlfa2;

        return $this;
    }
}
