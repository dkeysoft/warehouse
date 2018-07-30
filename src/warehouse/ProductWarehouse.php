<?php
namespace dkeysoft\warehouse\warehouse;


use dkeysoft\warehouse\access\AccessManager;
use dkeysoft\warehouse\product\Product;

/**
 * Class ProductWarehouse
 * @package dkeysoft\warehouse\warehouse
 */
class ProductWarehouse implements Warehouse
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var Product[]
     */
    protected $products;

    /**
     * @var AccessManager
     */
    protected $access_manager;

    /**
     * @return int
     */
    public function getCountProducts()
    {
        return count($this->products);
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function addProduct(Product $product)
    {
        $this->products[$product->getId()] = $product;
        return $this;
    }

    /**
     * @param Product[] $products
     * @return $this
     */
    public function addProducts(array $products)
    {
        if (!empty($products)) {
            foreach ($products as $product) {
                $this->addProduct($product);
            }
        }
        return $this;
    }

    /**
     * @param AccessManager $access_manager
     * @return $this
     */
    public function setAccessManager(AccessManager $access_manager)
    {
        $this->access_manager = $access_manager;
        return $this;
    }

    /**
     * @return bool
     */
    public function hasAccess()
    {
        return $this->access_manager->auth();
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return AccessManager
     */
    public function getAccessManager()
    {
        return $this->access_manager;
    }

    /**
     * @param string[] $ids
     * @return Product[]
     */
    public function takeProductsById(array $ids)
    {
        $taken_products = [];
        if (!empty($ids)) {
            foreach ($ids as $id) {
                if ($this->products[$id] != null) {
                    $taken_products[] = $this->products[$id];
                    unset($this->products[$id]);
                }
            }
        }

        return $taken_products;
    }
}