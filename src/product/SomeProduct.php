<?php
namespace dkeysoft\warehouse\product;


/**
 * Class SomeProduct
 * @package dkeysoft\warehouse\product
 */
class SomeProduct implements Product
{
    /**
     * @var string
     */
    protected $id;

    /**
     * SomeProduct constructor.
     * @param string $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}