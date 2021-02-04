<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetShopEZwrotyListResponse
 */
class GetShopEZwrotyListResponse
{
    /**
     * @var \Abryb\ENadawca\Type\ShopEZwrotyInfoType[] $shops
     */
    protected $shops = [
    ];

    /**
     * Adds as shops
     *
     * @param \Abryb\ENadawca\Type\ShopEZwrotyInfoType $shops
     *
     * @return self
     */
    public function addToShops(ShopEZwrotyInfoType $shops)
    {
        $this->shops[] = $shops;

        return $this;
    }

    /**
     * isset shops
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetShops($index)
    {
        return isset($this->shops[$index]);
    }

    /**
     * unset shops
     *
     * @param int|string $index
     */
    public function unsetShops($index)
    {
        unset($this->shops[$index]);
    }

    /**
     * Gets as shops
     *
     * @return \Abryb\ENadawca\Type\ShopEZwrotyInfoType[]
     */
    public function getShops()
    {
        return $this->shops;
    }

    /**
     * Sets a new shops
     *
     * @param \Abryb\ENadawca\Type\ShopEZwrotyInfoType[] $shops
     *
     * @return self
     */
    public function setShops(array $shops)
    {
        $this->shops = $shops;

        return $this;
    }
}
