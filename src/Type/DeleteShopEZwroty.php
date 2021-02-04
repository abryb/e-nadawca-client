<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing DeleteShopEZwroty
 */
class DeleteShopEZwroty
{
    /**
     * @var int $idShop
     */
    protected $idShop;

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
}
