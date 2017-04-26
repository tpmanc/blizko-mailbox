<?php
namespace tpmanc\blizko;

/**
 * Blizko item
 */
class Item
{
    protected $id;
    protected $link;

    public function __construct($id, $link)
    {
        $this->id = $id;
        $this->link = $link;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLink()
    {
        return $this->link;
    }
}
