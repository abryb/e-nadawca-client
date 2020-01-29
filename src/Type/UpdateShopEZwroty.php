<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing UpdateShopEZwroty
 */
class UpdateShopEZwroty
{
    /**
     * @var \Abryb\ENadawca\Type\ShopEZwrotyType $shop
     */
    protected $shop;

    /**
     * Gets as shop
     *
     * @return \Abryb\ENadawca\Type\ShopEZwrotyType
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Sets a new shop
     *
     * @param \Abryb\ENadawca\Type\ShopEZwrotyType $shop
     *
     * @return self
     */
    public function setShop(ShopEZwrotyType $shop)
    {
        $this->shop = $shop;

        return $this;
    }
}
