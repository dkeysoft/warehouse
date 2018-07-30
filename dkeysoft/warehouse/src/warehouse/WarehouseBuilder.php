<?php
namespace dkeysoft\warehouse\warehouse;


use dkeysoft\warehouse\access\AccessItem;
use dkeysoft\warehouse\access\AccessManager;

/**
 * Class WarehouseBuilder
 * @package dkeysoft\warehouse\warehouse
 */
class WarehouseBuilder
{
    /**
     * @var string
     */
    protected $warehouse_id;
    /**
     * @var Warehouse
     */
    protected $warehouse;
    /**
     * @var AccessManager
     */
    protected $access_manager;
    /**
     * @var AccessItem
     */
    protected $access_item;

    /**
     * @param string $warehouse_id
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->warehouse_id = $warehouse_id;
        return $this;
    }

    /**
     * @param AccessItem $access_item
     * @return $this
     */
    public function setAccessItem($access_item)
    {
        $this->access_item = $access_item;
        return $this;
    }

    /**
     * @param AccessManager $access_manager
     * @return $this
     */
    public function setAccessManager($access_manager)
    {
        $this->access_manager = $access_manager;
        return $this;
    }

    /**
     * @return $this
     */
    public function build()
    {
        $this->warehouse = new ProductWarehouse();

        $this->access_manager
            ->setAccessItem($this->access_item);

        $this->warehouse
            ->setId($this->warehouse_id)
            ->setAccessManager($this->access_manager);

        return $this;
    }

    /**
     * @return Warehouse
     */
    public function getResult()
    {
        return $this->warehouse;
    }
}