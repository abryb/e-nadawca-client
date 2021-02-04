<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing KartaType
 *
 * XSD Type: kartaType
 */
class KartaType
{
    /**
     * @var int $idKarta
     */
    protected $idKarta;

    /**
     * @var string $opis
     */
    protected $opis;

    /**
     * @var bool $aktywna
     */
    protected $aktywna;

    /**
     * Typ karty. Dopuszczalne wartości: 1-do nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych wartości może być rozszerzona w przyszłości.
     *
     * @var int $typ
     */
    protected $typ;

    /**
     * Lista adresów korespondencyjnych dla kart typu 2
     *
     * @var \Abryb\ENadawca\Type\AdresKorespondencyjnyType[] $adresKorespondencyjny
     */
    protected $adresKorespondencyjny = [
    ];

    /**
     * Gets as idKarta
     *
     * @return int
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Sets a new idKarta
     *
     * @param int $idKarta
     *
     * @return self
     */
    public function setIdKarta($idKarta)
    {
        $this->idKarta = $idKarta;

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
     * Gets as aktywna
     *
     * @return bool
     */
    public function getAktywna()
    {
        return $this->aktywna;
    }

    /**
     * Sets a new aktywna
     *
     * @param bool $aktywna
     *
     * @return self
     */
    public function setAktywna($aktywna)
    {
        $this->aktywna = $aktywna;

        return $this;
    }

    /**
     * Gets as typ
     *
     * Typ karty. Dopuszczalne wartości: 1-do nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych wartości może być rozszerzona w przyszłości.
     *
     * @return int
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets a new typ
     *
     * Typ karty. Dopuszczalne wartości: 1-do nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych wartości może być rozszerzona w przyszłości.
     *
     * @param int $typ
     *
     * @return self
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Adds as adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu 2
     *
     * @param \Abryb\ENadawca\Type\AdresKorespondencyjnyType $adresKorespondencyjny
     *
     * @return self
     */
    public function addToAdresKorespondencyjny(AdresKorespondencyjnyType $adresKorespondencyjny)
    {
        $this->adresKorespondencyjny[] = $adresKorespondencyjny;

        return $this;
    }

    /**
     * isset adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu 2
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAdresKorespondencyjny($index)
    {
        return isset($this->adresKorespondencyjny[$index]);
    }

    /**
     * unset adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu 2
     *
     * @param int|string $index
     */
    public function unsetAdresKorespondencyjny($index)
    {
        unset($this->adresKorespondencyjny[$index]);
    }

    /**
     * Gets as adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu 2
     *
     * @return \Abryb\ENadawca\Type\AdresKorespondencyjnyType[]
     */
    public function getAdresKorespondencyjny()
    {
        return $this->adresKorespondencyjny;
    }

    /**
     * Sets a new adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu 2
     *
     * @param \Abryb\ENadawca\Type\AdresKorespondencyjnyType[] $adresKorespondencyjny
     *
     * @return self
     */
    public function setAdresKorespondencyjny(array $adresKorespondencyjny)
    {
        $this->adresKorespondencyjny = $adresKorespondencyjny;

        return $this;
    }
}
