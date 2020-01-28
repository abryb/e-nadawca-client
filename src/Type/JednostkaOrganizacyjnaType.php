<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing JednostkaOrganizacyjnaType
 *
 * XSD Type: jednostkaOrganizacyjnaType
 */
class JednostkaOrganizacyjnaType
{
    /**
     * @var int $id
     */
    private $id;

    /**
     * @var string $nazwa
     */
    private $nazwa;

    /**
     * @var string $opis
     */
    private $opis;

    /**
     * @var string $mpk
     */
    private $mpk;

    /**
     * Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     *
     * @var \Abryb\ENadawca\Type\AccountType[] $account
     */
    private $account = [
    ];

    /**
     * Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     *
     * @var \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostkaNadrzedna
     */
    private $jednostkaNadrzedna;

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
     * Gets as mpk
     *
     * @return string
     */
    public function getMpk()
    {
        return $this->mpk;
    }

    /**
     * Sets a new mpk
     *
     * @param string $mpk
     *
     * @return self
     */
    public function setMpk($mpk)
    {
        $this->mpk = $mpk;

        return $this;
    }

    /**
     * Adds as account
     *
     * Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     *
     * @param \Abryb\ENadawca\Type\AccountType $account
     *
     * @return self
     */
    public function addToAccount(AccountType $account)
    {
        $this->account[] = $account;

        return $this;
    }

    /**
     * isset account
     *
     * Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     *
     * @param int|string $index
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     *
     * @return \Abryb\ENadawca\Type\AccountType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     *
     * @param \Abryb\ENadawca\Type\AccountType[] $account
     *
     * @return self
     */
    public function setAccount(array $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Gets as jednostkaNadrzedna
     *
     * Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     *
     * @return \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType
     */
    public function getJednostkaNadrzedna()
    {
        return $this->jednostkaNadrzedna;
    }

    /**
     * Sets a new jednostkaNadrzedna
     *
     * Wystarczy przesłać obiekt z ustawionym id reszta pól może zostać pominięta (aby zmniejszyć ilośc danych do transmisji)
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostkaNadrzedna
     *
     * @return self
     */
    public function setJednostkaNadrzedna(JednostkaOrganizacyjnaType $jednostkaNadrzedna)
    {
        $this->jednostkaNadrzedna = $jednostkaNadrzedna;

        return $this;
    }
}
