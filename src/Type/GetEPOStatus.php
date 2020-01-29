<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetEPOStatus
 */
class GetEPOStatus
{
    /**
     * Element służy do przekazania żądania uzupełnienia statusu EPO dla wskazanych przesyłek o dane dotyczące podpisu odbiorcy przesyłki. W
     *  zalezności od urządzenia wykorzystanego do utrwalenia podpisu, w odpowiedzi na wywołanie metody może zostać zwrócony sam obraz podpisu lub obraz podpisu
     *  uzupełniony o jego dane biometryczne.
     *
     * @var bool $withBioepo
     */
    protected $withBioepo;

    /**
     * @var string[] $guid
     */
    protected $guid = [
    ];

    /**
     * @var bool $endedOnly
     */
    protected $endedOnly;

    /**
     * @var int $idEnvelope
     */
    protected $idEnvelope;

    /**
     * Gets as withBioepo
     *
     * Element służy do przekazania żądania uzupełnienia statusu EPO dla wskazanych przesyłek o dane dotyczące podpisu odbiorcy przesyłki. W
     *  zalezności od urządzenia wykorzystanego do utrwalenia podpisu, w odpowiedzi na wywołanie metody może zostać zwrócony sam obraz podpisu lub obraz podpisu
     *  uzupełniony o jego dane biometryczne.
     *
     * @return bool
     */
    public function getWithBioepo()
    {
        return $this->withBioepo;
    }

    /**
     * Sets a new withBioepo
     *
     * Element służy do przekazania żądania uzupełnienia statusu EPO dla wskazanych przesyłek o dane dotyczące podpisu odbiorcy przesyłki. W
     *  zalezności od urządzenia wykorzystanego do utrwalenia podpisu, w odpowiedzi na wywołanie metody może zostać zwrócony sam obraz podpisu lub obraz podpisu
     *  uzupełniony o jego dane biometryczne.
     *
     * @param bool $withBioepo
     *
     * @return self
     */
    public function setWithBioepo($withBioepo)
    {
        $this->withBioepo = $withBioepo;

        return $this;
    }

    /**
     * Adds as guid
     *
     * @param string $guid
     *
     * @return self
     */
    public function addToGuid($guid)
    {
        $this->guid[] = $guid;

        return $this;
    }

    /**
     * isset guid
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGuid($index)
    {
        return isset($this->guid[$index]);
    }

    /**
     * unset guid
     *
     * @param int|string $index
     */
    public function unsetGuid($index)
    {
        unset($this->guid[$index]);
    }

    /**
     * Gets as guid
     *
     * @return string[]
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
    public function setGuid(array $guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Gets as endedOnly
     *
     * @return bool
     */
    public function getEndedOnly()
    {
        return $this->endedOnly;
    }

    /**
     * Sets a new endedOnly
     *
     * @param bool $endedOnly
     *
     * @return self
     */
    public function setEndedOnly($endedOnly)
    {
        $this->endedOnly = $endedOnly;

        return $this;
    }

    /**
     * Gets as idEnvelope
     *
     * @return int
     */
    public function getIdEnvelope()
    {
        return $this->idEnvelope;
    }

    /**
     * Sets a new idEnvelope
     *
     * @param int $idEnvelope
     *
     * @return self
     */
    public function setIdEnvelope($idEnvelope)
    {
        $this->idEnvelope = $idEnvelope;

        return $this;
    }
}
