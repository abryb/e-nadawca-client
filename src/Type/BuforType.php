<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing BuforType
 *
 * XSD Type: buforType
 */
class BuforType
{
    /**
     * @var int $idBufor
     */
    protected $idBufor;

    /**
     * @var \DateTime $dataNadania
     */
    protected $dataNadania;

    /**
     * @var int $urzadNadania
     */
    protected $urzadNadania;

    /**
     * @var bool $active
     */
    protected $active;

    /**
     * @var string $opis
     */
    protected $opis;

    /**
     * W przypadku ustawienia TRUE zostaną zmodyfikowane planowane daty nadania dla przesyłek znajdujących się w aktualizowanym buforze.
     * Dla przesyłek dla których wcześniej pobrano etykietę adresową zostaną wygenerowane nowe przesyłki z identycznymi parametrami jednak z NOWYM numerem nadania i GUID.
     * Przesyłki pierwotne (tzn. te dla których pobrano wcześniej etykiety adresowe) nie będą już dostępne.
     *
     * W przypadku ustawienia FALSE lub nie przekazania tego atrybutu, planowane daty nadania przesyłek nie będą modyfikowane.
     *
     * @var bool $aktualizujPlanowanaDateNadaniaPrzesylek
     */
    protected $aktualizujPlanowanaDateNadaniaPrzesylek;

    /**
     * @var \Abryb\ENadawca\Type\ProfilType $profil
     */
    protected $profil;

    /**
     * Gets as idBufor
     *
     * @return int
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Sets a new idBufor
     *
     * @param int $idBufor
     *
     * @return self
     */
    public function setIdBufor($idBufor)
    {
        $this->idBufor = $idBufor;

        return $this;
    }

    /**
     * Gets as dataNadania
     *
     * @return \DateTime
     */
    public function getDataNadania()
    {
        return $this->dataNadania;
    }

    /**
     * Sets a new dataNadania
     *
     * @return self
     */
    public function setDataNadania(\DateTime $dataNadania)
    {
        $this->dataNadania = $dataNadania;

        return $this;
    }

    /**
     * Gets as urzadNadania
     *
     * @return int
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Sets a new urzadNadania
     *
     * @param int $urzadNadania
     *
     * @return self
     */
    public function setUrzadNadania($urzadNadania)
    {
        $this->urzadNadania = $urzadNadania;

        return $this;
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Gets as opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Sets a new opis
     *
     * @param string $opis
     *
     * @return self
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Gets as aktualizujPlanowanaDateNadaniaPrzesylek
     *
     * W przypadku ustawienia TRUE zostaną zmodyfikowane planowane daty nadania dla przesyłek znajdujących się w aktualizowanym buforze.
     * Dla przesyłek dla których wcześniej pobrano etykietę adresową zostaną wygenerowane nowe przesyłki z identycznymi parametrami jednak z NOWYM numerem nadania i GUID.
     * Przesyłki pierwotne (tzn. te dla których pobrano wcześniej etykiety adresowe) nie będą już dostępne.
     *
     * W przypadku ustawienia FALSE lub nie przekazania tego atrybutu, planowane daty nadania przesyłek nie będą modyfikowane.
     *
     * @return bool
     */
    public function getAktualizujPlanowanaDateNadaniaPrzesylek()
    {
        return $this->aktualizujPlanowanaDateNadaniaPrzesylek;
    }

    /**
     * Sets a new aktualizujPlanowanaDateNadaniaPrzesylek
     *
     * W przypadku ustawienia TRUE zostaną zmodyfikowane planowane daty nadania dla przesyłek znajdujących się w aktualizowanym buforze.
     * Dla przesyłek dla których wcześniej pobrano etykietę adresową zostaną wygenerowane nowe przesyłki z identycznymi parametrami jednak z NOWYM numerem nadania i GUID.
     * Przesyłki pierwotne (tzn. te dla których pobrano wcześniej etykiety adresowe) nie będą już dostępne.
     *
     * W przypadku ustawienia FALSE lub nie przekazania tego atrybutu, planowane daty nadania przesyłek nie będą modyfikowane.
     *
     * @param bool $aktualizujPlanowanaDateNadaniaPrzesylek
     *
     * @return self
     */
    public function setAktualizujPlanowanaDateNadaniaPrzesylek($aktualizujPlanowanaDateNadaniaPrzesylek)
    {
        $this->aktualizujPlanowanaDateNadaniaPrzesylek = $aktualizujPlanowanaDateNadaniaPrzesylek;

        return $this;
    }

    /**
     * Gets as profil
     *
     * @return \Abryb\ENadawca\Type\ProfilType
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Sets a new profil
     *
     * @param \Abryb\ENadawca\Type\ProfilType $profil
     *
     * @return self
     */
    public function setProfil(ProfilType $profil)
    {
        $this->profil = $profil;

        return $this;
    }
}
