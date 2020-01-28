<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing AccountType
 *
 * XSD Type: accountType
 */
class AccountType
{
    /**
     * @var string $userName
     */
    private $userName;

    /**
     * @var string $firstName
     */
    private $firstName;

    /**
     * @var string $lastName
     */
    private $lastName;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $status
     */
    private $status;

    /**
     * @var \Abryb\ENadawca\Type\KartaType[] $karta
     */
    private $karta = [
    ];

    /**
     * @var string[] $permision
     */
    private $permision = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\ProfilType[] $profil
     */
    private $profil = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[] $jednostka
     */
    private $jednostka = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $domyslnaJednostka
     */
    private $domyslnaJednostka;

    /**
     * @var \Abryb\ENadawca\Type\ProfilType $domyslnyProfil
     */
    private $domyslnyProfil;

    /**
     * @var string[] $dostepPoAdresieIP
     */
    private $dostepPoAdresieIP = [
    ];

    /**
     * Gets as userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets a new userName
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Adds as karta
     *
     * @param \Abryb\ENadawca\Type\KartaType $karta
     *
     * @return self
     */
    public function addToKarta(KartaType $karta)
    {
        $this->karta[] = $karta;

        return $this;
    }

    /**
     * isset karta
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetKarta($index)
    {
        return isset($this->karta[$index]);
    }

    /**
     * unset karta
     *
     * @param int|string $index
     */
    public function unsetKarta($index)
    {
        unset($this->karta[$index]);
    }

    /**
     * Gets as karta
     *
     * @return \Abryb\ENadawca\Type\KartaType[]
     */
    public function getKarta()
    {
        return $this->karta;
    }

    /**
     * Sets a new karta
     *
     * @param \Abryb\ENadawca\Type\KartaType[] $karta
     *
     * @return self
     */
    public function setKarta(array $karta)
    {
        $this->karta = $karta;

        return $this;
    }

    /**
     * Adds as permision
     *
     * @param string $permision
     *
     * @return self
     */
    public function addToPermision($permision)
    {
        $this->permision[] = $permision;

        return $this;
    }

    /**
     * isset permision
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPermision($index)
    {
        return isset($this->permision[$index]);
    }

    /**
     * unset permision
     *
     * @param int|string $index
     */
    public function unsetPermision($index)
    {
        unset($this->permision[$index]);
    }

    /**
     * Gets as permision
     *
     * @return string[]
     */
    public function getPermision()
    {
        return $this->permision;
    }

    /**
     * Sets a new permision
     *
     * @param string $permision
     *
     * @return self
     */
    public function setPermision(array $permision)
    {
        $this->permision = $permision;

        return $this;
    }

    /**
     * Adds as profil
     *
     * @param \Abryb\ENadawca\Type\ProfilType $profil
     *
     * @return self
     */
    public function addToProfil(ProfilType $profil)
    {
        $this->profil[] = $profil;

        return $this;
    }

    /**
     * isset profil
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProfil($index)
    {
        return isset($this->profil[$index]);
    }

    /**
     * unset profil
     *
     * @param int|string $index
     */
    public function unsetProfil($index)
    {
        unset($this->profil[$index]);
    }

    /**
     * Gets as profil
     *
     * @return \Abryb\ENadawca\Type\ProfilType[]
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Sets a new profil
     *
     * @param \Abryb\ENadawca\Type\ProfilType[] $profil
     *
     * @return self
     */
    public function setProfil(array $profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Adds as jednostka
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostka
     *
     * @return self
     */
    public function addToJednostka(JednostkaOrganizacyjnaType $jednostka)
    {
        $this->jednostka[] = $jednostka;

        return $this;
    }

    /**
     * isset jednostka
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetJednostka($index)
    {
        return isset($this->jednostka[$index]);
    }

    /**
     * unset jednostka
     *
     * @param int|string $index
     */
    public function unsetJednostka($index)
    {
        unset($this->jednostka[$index]);
    }

    /**
     * Gets as jednostka
     *
     * @return \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[]
     */
    public function getJednostka()
    {
        return $this->jednostka;
    }

    /**
     * Sets a new jednostka
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[] $jednostka
     *
     * @return self
     */
    public function setJednostka(array $jednostka)
    {
        $this->jednostka = $jednostka;

        return $this;
    }

    /**
     * Gets as domyslnaJednostka
     *
     * @return \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType
     */
    public function getDomyslnaJednostka()
    {
        return $this->domyslnaJednostka;
    }

    /**
     * Sets a new domyslnaJednostka
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $domyslnaJednostka
     *
     * @return self
     */
    public function setDomyslnaJednostka(JednostkaOrganizacyjnaType $domyslnaJednostka)
    {
        $this->domyslnaJednostka = $domyslnaJednostka;

        return $this;
    }

    /**
     * Gets as domyslnyProfil
     *
     * @return \Abryb\ENadawca\Type\ProfilType
     */
    public function getDomyslnyProfil()
    {
        return $this->domyslnyProfil;
    }

    /**
     * Sets a new domyslnyProfil
     *
     * @param \Abryb\ENadawca\Type\ProfilType $domyslnyProfil
     *
     * @return self
     */
    public function setDomyslnyProfil(ProfilType $domyslnyProfil)
    {
        $this->domyslnyProfil = $domyslnyProfil;

        return $this;
    }

    /**
     * Adds as dostepPoAdresieIP
     *
     * @param string $dostepPoAdresieIP
     *
     * @return self
     */
    public function addToDostepPoAdresieIP($dostepPoAdresieIP)
    {
        $this->dostepPoAdresieIP[] = $dostepPoAdresieIP;

        return $this;
    }

    /**
     * isset dostepPoAdresieIP
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDostepPoAdresieIP($index)
    {
        return isset($this->dostepPoAdresieIP[$index]);
    }

    /**
     * unset dostepPoAdresieIP
     *
     * @param int|string $index
     */
    public function unsetDostepPoAdresieIP($index)
    {
        unset($this->dostepPoAdresieIP[$index]);
    }

    /**
     * Gets as dostepPoAdresieIP
     *
     * @return string[]
     */
    public function getDostepPoAdresieIP()
    {
        return $this->dostepPoAdresieIP;
    }

    /**
     * Sets a new dostepPoAdresieIP
     *
     * @param string[] $dostepPoAdresieIP
     *
     * @return self
     */
    public function setDostepPoAdresieIP(array $dostepPoAdresieIP)
    {
        $this->dostepPoAdresieIP = $dostepPoAdresieIP;

        return $this;
    }
}
