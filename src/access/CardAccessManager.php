<?php
namespace dkeysoft\warehouse\access;


/**
 * Class CardAccessManager
 * @package dkeysoft\warehouse\access
 */
class CardAccessManager implements AccessManager
{

    /**
     * @var Card
     */
    protected $card;

    /**
     * @return boolean
     */
    public function auth()
    {
        // TODO: some logic about checking card
        return true;
    }

    /**
     * @param AccessItem $card
     * @return $this
     */
    public function setAccessItem(AccessItem $card)
    {
        $this->card = $card;
        return $this;
    }
}