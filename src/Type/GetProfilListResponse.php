<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetProfilListResponse
 */
class GetProfilListResponse
{
    /**
     * @var \Abryb\ENadawca\Type\ProfilType[] $profil
     */
    private $profil = [
    ];

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
}
