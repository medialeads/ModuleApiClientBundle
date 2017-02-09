<?php

namespace Module\ApiClientBundle\ModuleMenu\Model;

class MenuElement
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $linkUrl;

    /**
     * @var bool
     */
    private $blankLink;

    /**
     * @var int
     */
    private $position;

    /**
     * @param int $id
     * @param string $label
     * @param string $linkUrl
     * @param bool $blankLink
     * @param int $position
     */
    public function __construct($id, $label, $linkUrl, $blankLink, $position)
    {
        $this->id = $id;
        $this->label = $label;
        $this->linkUrl = $linkUrl;
        $this->blankLink = $blankLink;
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->linkUrl;
    }

    /**
     * @return bool
     */
    public function isBlankLink()
    {
        return $this->blankLink;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }
}
