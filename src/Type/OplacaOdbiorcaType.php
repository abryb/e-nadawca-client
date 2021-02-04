<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing OplacaOdbiorcaType
 *
 * XSD Type: oplacaOdbiorcaType
 */
class OplacaOdbiorcaType
{
    /**
     * Typ odbiorcy/adresata opłacającego przesyłkę. Dopuszczalne wartości: ADRESAT_INDYWIDUALNY, ADRESAT_UMOWNY, ODDZIAL.
     *
     * @var string $typ
     */
    protected $typ;

    /**
     * Wymagalny dla typ=ADRESAT_UMOWNY i typ=ODDZIAL.
     *
     * @var \Abryb\ENadawca\Type\OplacaOdbiorcaKartaType $karta
     */
    protected $karta;

    /**
     * Gets as typ
     *
     * Typ odbiorcy/adresata opłacającego przesyłkę. Dopuszczalne wartości: ADRESAT_INDYWIDUALNY, ADRESAT_UMOWNY, ODDZIAL.
     *
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets a new typ
     *
     * Typ odbiorcy/adresata opłacającego przesyłkę. Dopuszczalne wartości: ADRESAT_INDYWIDUALNY, ADRESAT_UMOWNY, ODDZIAL.
     *
     * @param string $typ
     *
     * @return self
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Gets as karta
     *
     * Wymagalny dla typ=ADRESAT_UMOWNY i typ=ODDZIAL.
     *
     * @return \Abryb\ENadawca\Type\OplacaOdbiorcaKartaType
     */
    public function getKarta()
    {
        return $this->karta;
    }

    /**
     * Sets a new karta
     *
     * Wymagalny dla typ=ADRESAT_UMOWNY i typ=ODDZIAL.
     *
     * @param \Abryb\ENadawca\Type\OplacaOdbiorcaKartaType $karta
     *
     * @return self
     */
    public function setKarta(OplacaOdbiorcaKartaType $karta)
    {
        $this->karta = $karta;

        return $this;
    }
}
