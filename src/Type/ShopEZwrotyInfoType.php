<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ShopEZwrotyInfoType
 *
 * XSD Type: shopEZwrotyInfoType
 */
class ShopEZwrotyInfoType
{
    /**
     * @var int $idShop
     */
    protected $idShop;

    /**
     * @var string $przyjaznaNazwa
     */
    protected $przyjaznaNazwa;

    /**
     * @var bool $availableOnWebsite
     */
    protected $availableOnWebsite;

    /**
     * @var string $nip
     */
    protected $nip;

    /**
     * Gets as idShop
     *
     * @return int
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Sets a new idShop
     *
     * @param int $idShop
     *
     * @return self
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Gets as przyjaznaNazwa
     *
     * @return string
     */
    public function getPrzyjaznaNazwa()
    {
        return $this->przyjaznaNazwa;
    }

    /**
     * Sets a new przyjaznaNazwa
     *
     * @param string $przyjaznaNazwa
     *
     * @return self
     */
    public function setPrzyjaznaNazwa($przyjaznaNazwa)
    {
        $this->przyjaznaNazwa = $przyjaznaNazwa;

        return $this;
    }

    /**
     * Gets as availableOnWebsite
     *
     * @return bool
     */
    public function getAvailableOnWebsite()
    {
        return $this->availableOnWebsite;
    }

    /**
     * Sets a new availableOnWebsite
     *
     * @param bool $availableOnWebsite
     *
     * @return self
     */
    public function setAvailableOnWebsite($availableOnWebsite)
    {
        $this->availableOnWebsite = $availableOnWebsite;

        return $this;
    }

    /**
     * Gets as nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Sets a new nip
     *
     * @param string $nip
     *
     * @return self
     */
    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }
}
