<?php

namespace Module\ApiClientBundle\ModuleSlider\Model;

class Slider
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var string
     */
    private $imageAlt;

    /**
     * @var string
     */
    private $linkUrl;

    /**
     * @var bool
     */
    private $blankLink;

    /**
     * @param int $id
     * @param string $imageUrl
     * @param string $imageAlt
     * @param string $linkUrl
     * @param bool $blankLink
     */
    public function __construct($id, $imageUrl, $imageAlt, $linkUrl, $blankLink)
    {
        $this->id = $id;
        $this->imageUrl = $imageUrl;
        $this->imageAlt = $imageAlt;
        $this->linkUrl = $linkUrl;
        $this->blankLink = $blankLink;
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
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @return string
     */
    public function getImageAlt()
    {
        return $this->imageAlt;
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
}
