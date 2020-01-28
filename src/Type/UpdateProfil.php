<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing UpdateProfil
 */
class UpdateProfil
{
    /**
     * @var \Abryb\ENadawca\Type\ProfilType $profil
     */
    private $profil;

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
