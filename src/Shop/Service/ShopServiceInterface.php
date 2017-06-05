<?php

namespace Kfina\Bewamo\Shop\Service;

use Kfina\Bewamo\Shop\Entity\ShopInterface;

interface ShopServiceInterface
{
    /**
     * @param int $id
     *
     * @return ShopInterface
     */
    public function findShopWithId(int $id);

    /**
     * @param ShopInterface $shop
     *
     * @return ShopInterface
     */
    public function create(ShopInterface $shop);

    /**
     * @param string $name
     *
     * @return ShopInterface[]
     */
    public function findShopWithName(string $name);


    /**
     * @return ShopInterface[]
     */
    public function findAll();
}
