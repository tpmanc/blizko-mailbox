<?php
namespace tpmanc\blizko;

use tpmanc\blizko\Item;

/**
 * Blizko order
 */
class Order extends Item
{
    private $username;

    function __construct($id, $link, $username)
    {
        parent::__construct($id, $link);
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
}
