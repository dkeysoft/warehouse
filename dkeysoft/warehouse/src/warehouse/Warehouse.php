<?php
namespace dkeysoft\warehouse\warehouse;


use dkeysoft\warehouse\access\AccessManager;
use dkeysoft\warehouse\product\Product;

/**
 * Interface Warehouse
 * @package dkeysoft\warehouse\warehouse
 */
interface Warehouse
{
    /**
     * @param $id
     * @return $this
     */
    public function setId($id);

    /**
     * @param Product $product
     * @return $this
     */
    public function addProduct(Product $product);

    /**
     * @param Product[] $products
     * @return $this
     */
    public function addProducts(array $products);

    /**
     * @return Product[]
     */
    public function getProducts();

    /**
     * @param string[] $ids
     * @return Product[]
     */
    public function takeProductsById(array $ids);

    /**
     * @return integer
     */
    public function getCountProducts();

    /**
     * @param AccessManager $access_manager
     * @return $this
     */
    public function setAccessManager(AccessManager $access_manager);

    /**
     * @return boolean
     */
    public function hasAccess();
}