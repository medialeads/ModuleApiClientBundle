<?php

namespace Module\ApiClientBundle\ModuleInformation\Model;

class Information
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $faviconUrl;

    /**
     * @var string
     */
    private $logoUrl;

    /**
     * @var string
     */
    private $ogImageUrl;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var string
     */
    private $emailsSenderName;

    /**
     * @var string
     */
    private $emailsSignatureContent;

    /**
     * @var string
     */
    private $tos;

    /**
     * @var string
     */
    private $cookiesHeadbandText;

    /**
     * @var string
     */
    private $cookiesLinkText;

    /**
     * @var string
     */
    private $cookiesPageContent;

    /**
     * @var string
     */
    private $code;

    /**
     * @param int|null $id
     * @param string|null $faviconUrl
     * @param string|null $logoUrl
     * @param string|null $ogImageUrl
     * @param string|null $title
     * @param string|null $description
     * @param string|null $keywords
     * @param string|null $emailsSenderName
     * @param string|null $emailsSignatureContent
     * @param string|null $tos
     * @param string|null $cookiesHeadbandText
     * @param string|null $cookiesLinkText
     * @param string|null $cookiesPageContent
     * @param string|null $code
     */
    public function __construct($id = null, $faviconUrl = null, $logoUrl = null, $ogImageUrl = null, $title = null,
        $description = null, $keywords = null, $emailsSenderName = null, $emailsSignatureContent = null, $tos = null,
        $cookiesHeadbandText = null, $cookiesLinkText = null, $cookiesPageContent = null, $code = null)
    {
        $this->id = $id;
        $this->faviconUrl = $faviconUrl;
        $this->logoUrl = $logoUrl;
        $this->ogImageUrl = $ogImageUrl;
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->emailsSenderName = $emailsSenderName;
        $this->emailsSignatureContent = $emailsSignatureContent;
        $this->tos = $tos;
        $this->cookiesHeadbandText = $cookiesHeadbandText;
        $this->cookiesLinkText = $cookiesLinkText;
        $this->cookiesPageContent = $cookiesPageContent;
        $this->code = $code;
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
    public function getFaviconUrl()
    {
        return $this->faviconUrl;
    }

    /**
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * @return string
     */
    public function getOgImageUrl()
    {
        return $this->ogImageUrl;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @return string
     */
    public function getEmailsSenderName()
    {
        return $this->emailsSenderName;
    }

    /**
     * @return string
     */
    public function getEmailsSignatureContent()
    {
        return $this->emailsSignatureContent;
    }

    /**
     * @return string
     */
    public function getTos()
    {
        return $this->tos;
    }

    /**
     * @return string
     */
    public function getCookiesHeadbandText()
    {
        return $this->cookiesHeadbandText;
    }

    /**
     * @return string
     */
    public function getCookiesLinkText()
    {
        return $this->cookiesLinkText;
    }

    /**
     * @return string
     */
    public function getCookiesPageContent()
    {
        return $this->cookiesPageContent;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
