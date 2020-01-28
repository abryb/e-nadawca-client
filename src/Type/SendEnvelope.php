<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing SendEnvelope
 */
class SendEnvelope
{
    /**
     * @var int $urzadNadania
     */
    private $urzadNadania;

    /**
     * @var \Abryb\ENadawca\Type\PakietType[] $pakiet
     */
    private $pakiet = [
    ];

    /**
     * @var int $idBufor
     */
    private $idBufor;

    /**
     * @var \Abryb\ENadawca\Type\ProfilType $profil
     */
    private $profil;

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
     * Adds as pakiet
     *
     * @param \Abryb\ENadawca\Type\PakietType $pakiet
     *
     * @return self
     */
    public function addToPakiet(PakietType $pakiet)
    {
        $this->pakiet[] = $pakiet;

        return $this;
    }

    /**
     * isset pakiet
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPakiet($index)
    {
        return isset($this->pakiet[$index]);
    }

    /**
     * unset pakiet
     *
     * @param int|string $index
     */
    public function unsetPakiet($index)
    {
        unset($this->pakiet[$index]);
    }

    /**
     * Gets as pakiet
     *
     * @return \Abryb\ENadawca\Type\PakietType[]
     */
    public function getPakiet()
    {
        return $this->pakiet;
    }

    /**
     * Sets a new pakiet
     *
     * @param \Abryb\ENadawca\Type\PakietType[] $pakiet
     *
     * @return self
     */
    public function setPakiet(array $pakiet)
    {
        $this->pakiet = $pakiet;

        return $this;
    }

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
