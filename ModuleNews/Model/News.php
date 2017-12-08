<?php

namespace Module\ApiClientBundle\ModuleNews\Model;

class News
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var \DateTime
     */
    private $startingDisplayDate;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $metaTitle;

    /**
     * @var string
     */
    private $metaDescription;

    /**
     * @var string
     */
    private $summary;

    /**
     * @param int $id
     * @param string $title
     * @param string $content
     * @param string $imageUrl
     * @param \DateTime $startingDisplayDate
     * @param string $slug
     */
    public function __construct($id, $title, $content, $imageUrl, \DateTime $startingDisplayDate, $slug, $metaTitle, $metaDescription, $summary)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->imageUrl = $imageUrl;
        $this->startingDisplayDate = $startingDisplayDate;
        $this->slug = $slug;
        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;
        $this->summary = $summary;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @return \DateTime
     */
    public function getStartingDisplayDate()
    {
        return $this->startingDisplayDate;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }
}
