<?php
namespace dkeysoft\warehouse\helper;


use dkeysoft\warehouse\access\AccessItem;
use dkeysoft\warehouse\access\AccessManager;
use dkeysoft\warehouse\warehouse\Warehouse;
use dkeysoft\warehouse\warehouse\WarehouseBuilder;

/**
 * Class WarehouseHelper
 * @package dkeysoft\warehouse\helper
 */
class WarehouseHelper
{

    /**
     * @param string $warehouse_id
     * @param AccessItem $access_item
     * @param AccessManager $access_manager
     * @return Warehouse
     */
    public static function createWarehouse($warehouse_id, AccessItem $access_item, AccessManager $access_manager)
    {
        $builder = new WarehouseBuilder();
        return $builder
            ->setWarehouseId($warehouse_id)
            ->setAccessItem($access_item)
            ->setAccessManager($access_manager)
            ->build()
            ->getResult();
    }
}