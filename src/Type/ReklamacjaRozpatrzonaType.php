<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ReklamacjaRozpatrzonaType
 *
 * XSD Type: reklamacjaRozpatrzonaType
 */
class ReklamacjaRozpatrzonaType
{
    /**
     * @var string $guid
     */
    protected $guid;

    /**
     * @var string $numerNadania
     */
    protected $numerNadania;

    /**
     * @var string $rozstrzygniecie
     */
    protected $rozstrzygniecie;

    /**
     * @var int $przyznaneOdszkodowanie
     */
    protected $przyznaneOdszkodowanie;

    /**
     * @var string $uzasadnienie
     */
    protected $uzasadnienie;

    /**
     * @var \DateTime $dataRozpatrzenia
     */
    protected $dataRozpatrzenia;

    /**
     * @var string $nazwaJednostkiRozpatrujacej
     */
    protected $nazwaJednostkiRozpatrujacej;

    /**
     * @var string $osobaRozpatrujaca
     */
    protected $osobaRozpatrujaca;

    /**
     * @var string $idReklamacja
     */
    protected $idReklamacja;

    /**
     * Gets as guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * @param string $guid
     *
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     *
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;

        return $this;
    }

    /**
     * Gets as rozstrzygniecie
     *
     * @return string
     */
    public function getRozstrzygniecie()
    {
        return $this->rozstrzygniecie;
    }

    /**
     * Sets a new rozstrzygniecie
     *
     * @param string $rozstrzygniecie
     *
     * @return self
     */
    public function setRozstrzygniecie($rozstrzygniecie)
    {
        $this->rozstrzygniecie = $rozstrzygniecie;

        return $this;
    }

    /**
     * Gets as przyznaneOdszkodowanie
     *
     * @return int
     */
    public function getPrzyznaneOdszkodowanie()
    {
        return $this->przyznaneOdszkodowanie;
    }

    /**
     * Sets a new przyznaneOdszkodowanie
     *
     * @param int $przyznaneOdszkodowanie
     *
     * @return self
     */
    public function setPrzyznaneOdszkodowanie($przyznaneOdszkodowanie)
    {
        $this->przyznaneOdszkodowanie = $przyznaneOdszkodowanie;

        return $this;
    }

    /**
     * Gets as uzasadnienie
     *
     * @return string
     */
    public function getUzasadnienie()
    {
        return $this->uzasadnienie;
    }

    /**
     * Sets a new uzasadnienie
     *
     * @param string $uzasadnienie
     *
     * @return self
     */
    public function setUzasadnienie($uzasadnienie)
    {
        $this->uzasadnienie = $uzasadnienie;

        return $this;
    }

    /**
     * Gets as dataRozpatrzenia
     *
     * @return \DateTime
     */
    public function getDataRozpatrzenia()
    {
        return $this->dataRozpatrzenia;
    }

    /**
     * Sets a new dataRozpatrzenia
     *
     * @return self
     */
    public function setDataRozpatrzenia(\DateTime $dataRozpatrzenia)
    {
        $this->dataRozpatrzenia = $dataRozpatrzenia;

        return $this;
    }

    /**
     * Gets as nazwaJednostkiRozpatrujacej
     *
     * @return string
     */
    public function getNazwaJednostkiRozpatrujacej()
    {
        return $this->nazwaJednostkiRozpatrujacej;
    }

    /**
     * Sets a new nazwaJednostkiRozpatrujacej
     *
     * @param string $nazwaJednostkiRozpatrujacej
     *
     * @return self
     */
    public function setNazwaJednostkiRozpatrujacej($nazwaJednostkiRozpatrujacej)
    {
        $this->nazwaJednostkiRozpatrujacej = $nazwaJednostkiRozpatrujacej;

        return $this;
    }

    /**
     * Gets as osobaRozpatrujaca
     *
     * @return string
     */
    public function getOsobaRozpatrujaca()
    {
        return $this->osobaRozpatrujaca;
    }

    /**
     * Sets a new osobaRozpatrujaca
     *
     * @param string $osobaRozpatrujaca
     *
     * @return self
     */
    public function setOsobaRozpatrujaca($osobaRozpatrujaca)
    {
        $this->osobaRozpatrujaca = $osobaRozpatrujaca;

        return $this;
    }

    /**
     * Gets as idReklamacja
     *
     * @return string
     */
    public function getIdReklamacja()
    {
        return $this->idReklamacja;
    }

    /**
     * Sets a new idReklamacja
     *
     * @param string $idReklamacja
     *
     * @return self
     */
    public function setIdReklamacja($idReklamacja)
    {
        $this->idReklamacja = $idReklamacja;

        return $this;
    }
}
