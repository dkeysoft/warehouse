<?php
namespace dkeysoft\warehouse\access;


use dkeysoft\warehouse\product\Product;

/**
 * Class PassportAccessManager
 * @package dkeysoft\warehouse\access
 */
class PassportAccessManager implements AccessManager
{

    /**
     * @var Product
     */
    protected $passport;

    /**
     * @return boolean
     */
    public function auth()
    {
        // TODO: some logic about checking passport
        return true;
    }

    /**
     * @param AccessItem $passport
     * @return $this
     */
    public function setAccessItem(AccessItem $passport)
    {
        $this->passport = $passport;
        return $this;
    }
}