<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GlobalExpresType
 *
 * XSD Type: globalExpresType
 */
class GlobalExpresType extends PrzesylkaRejestrowanaType
{
    /**
     * @var int $masa
     */
    protected $masa;

    /**
     * @var bool $posteRestante
     */
    protected $posteRestante;

    /**
     * Element określający zawartość przesyłki.
     * Aktualnie dopuszczalne wartości:
     * KORESPONDENCJA
     * DOKUMENTY_PONIZEJ_250G
     * DOKUMENTY_POWYZEJ_250G
     * TOWARY
     *
     * @var string $zawartosc
     */
    protected $zawartosc;

    /**
     * @var string $kategoria
     */
    protected $kategoria;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta;

    /**
     * @var \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie;

    /**
     * @var \Abryb\ENadawca\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    protected $potwierdzenieDoreczenia;

    /**
     * @var \Abryb\ENadawca\Type\DeklaracjaCelna2Type $deklaracjaCelna2
     */
    protected $deklaracjaCelna2;

    /**
     * @var \Abryb\ENadawca\Type\SposobDoreczeniaType $sposobDoreczenia
     */
    protected $sposobDoreczenia;

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
     * Gets as zawartosc
     *
     * Element określający zawartość przesyłki.
     * Aktualnie dopuszczalne wartości:
     * KORESPONDENCJA
     * DOKUMENTY_PONIZEJ_250G
     * DOKUMENTY_POWYZEJ_250G
     * TOWARY
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
     * Element określający zawartość przesyłki.
     * Aktualnie dopuszczalne wartości:
     * KORESPONDENCJA
     * DOKUMENTY_PONIZEJ_250G
     * DOKUMENTY_POWYZEJ_250G
     * TOWARY
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
     * Gets as kategoria
     *
     * @return string
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Sets a new kategoria
     *
     * @param string $kategoria
     *
     * @return self
     */
    public function setKategoria($kategoria)
    {
        $this->kategoria = $kategoria;

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
     * Gets as deklaracjaCelna2
     *
     * @return \Abryb\ENadawca\Type\DeklaracjaCelna2Type
     */
    public function getDeklaracjaCelna2()
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * Sets a new deklaracjaCelna2
     *
     * @param \Abryb\ENadawca\Type\DeklaracjaCelna2Type $deklaracjaCelna2
     *
     * @return self
     */
    public function setDeklaracjaCelna2(DeklaracjaCelna2Type $deklaracjaCelna2)
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;

        return $this;
    }

    /**
     * Gets as sposobDoreczenia
     *
     * @return \Abryb\ENadawca\Type\SposobDoreczeniaType
     */
    public function getSposobDoreczenia()
    {
        return $this->sposobDoreczenia;
    }

    /**
     * Sets a new sposobDoreczenia
     *
     * @param \Abryb\ENadawca\Type\SposobDoreczeniaType $sposobDoreczenia
     *
     * @return self
     */
    public function setSposobDoreczenia(SposobDoreczeniaType $sposobDoreczenia)
    {
        $this->sposobDoreczenia = $sposobDoreczenia;

        return $this;
    }
}
