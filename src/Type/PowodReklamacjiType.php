<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PowodReklamacjiType
 *
 * XSD Type: powodReklamacjiType
 */
class PowodReklamacjiType
{
    /**
     * @var int $idPowodGlowny
     */
    protected $idPowodGlowny;

    /**
     * @var string $powodGlownyOpis
     */
    protected $powodGlownyOpis;

    /**
     * @var \Abryb\ENadawca\Type\PowodSzczegolowyType[] $powodSzczegolowy
     */
    protected $powodSzczegolowy = [
    ];

    /**
     * Gets as idPowodGlowny
     *
     * @return int
     */
    public function getIdPowodGlowny()
    {
        return $this->idPowodGlowny;
    }

    /**
     * Sets a new idPowodGlowny
     *
     * @param int $idPowodGlowny
     *
     * @return self
     */
    public function setIdPowodGlowny($idPowodGlowny)
    {
        $this->idPowodGlowny = $idPowodGlowny;

        return $this;
    }

    /**
     * Gets as powodGlownyOpis
     *
     * @return string
     */
    public function getPowodGlownyOpis()
    {
        return $this->powodGlownyOpis;
    }

    /**
     * Sets a new powodGlownyOpis
     *
     * @param string $powodGlownyOpis
     *
     * @return self
     */
    public function setPowodGlownyOpis($powodGlownyOpis)
    {
        $this->powodGlownyOpis = $powodGlownyOpis;

        return $this;
    }

    /**
     * Adds as powodSzczegolowy
     *
     * @param \Abryb\ENadawca\Type\PowodSzczegolowyType $powodSzczegolowy
     *
     * @return self
     */
    public function addToPowodSzczegolowy(PowodSzczegolowyType $powodSzczegolowy)
    {
        $this->powodSzczegolowy[] = $powodSzczegolowy;

        return $this;
    }

    /**
     * isset powodSzczegolowy
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPowodSzczegolowy($index)
    {
        return isset($this->powodSzczegolowy[$index]);
    }

    /**
     * unset powodSzczegolowy
     *
     * @param int|string $index
     */
    public function unsetPowodSzczegolowy($index)
    {
        unset($this->powodSzczegolowy[$index]);
    }

    /**
     * Gets as powodSzczegolowy
     *
     * @return \Abryb\ENadawca\Type\PowodSzczegolowyType[]
     */
    public function getPowodSzczegolowy()
    {
        return $this->powodSzczegolowy;
    }

    /**
     * Sets a new powodSzczegolowy
     *
     * @param \Abryb\ENadawca\Type\PowodSzczegolowyType[] $powodSzczegolowy
     *
     * @return self
     */
    public function setPowodSzczegolowy(array $powodSzczegolowy)
    {
        $this->powodSzczegolowy = $powodSzczegolowy;

        return $this;
    }
}
