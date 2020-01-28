<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PlatnikType
 *
 * XSD Type: platnikType
 */
class PlatnikType
{
    /**
     * @var string $uiszczaOplate
     */
    private $uiszczaOplate;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $adresPlatnika
     */
    private $adresPlatnika;

    /**
     * Gets as uiszczaOplate
     *
     * @return string
     */
    public function getUiszczaOplate()
    {
        return $this->uiszczaOplate;
    }

    /**
     * Sets a new uiszczaOplate
     *
     * @param string $uiszczaOplate
     *
     * @return self
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
        $this->uiszczaOplate = $uiszczaOplate;

        return $this;
    }

    /**
     * Gets as adresPlatnika
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getAdresPlatnika()
    {
        return $this->adresPlatnika;
    }

    /**
     * Sets a new adresPlatnika
     *
     * @param \Abryb\ENadawca\Type\AdresType $adresPlatnika
     *
     * @return self
     */
    public function setAdresPlatnika(AdresType $adresPlatnika)
    {
        $this->adresPlatnika = $adresPlatnika;

        return $this;
    }
}
