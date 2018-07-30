<?php
namespace dkeysoft\warehouse\access;


/**
 * Interface AccessManager
 * @package dkeysoft\warehouse\access
 */
interface AccessManager
{
    /**
     * @return boolean
     */
    public function auth();

    /**
     * @param AccessItem $item
     * @return $this
     */
    public function setAccessItem(AccessItem $item);
}