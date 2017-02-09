<?php

namespace Module\ApiClientBundle\ModuleMenu\Model;

class Menu
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var array
     */
    private $menuElements;

    /**
     * @param int $id
     * @param array $menuElements
     */
    public function __construct($id, array $menuElements)
    {
        $this->id = $id;
        $this->menuElements = $menuElements;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getMenuElements()
    {
        return $this->menuElements;
    }
}
