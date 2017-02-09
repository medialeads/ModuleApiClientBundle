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
    private $footerContent;

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
     * @param int $id
     * @param string $faviconUrl
     * @param string $logoUrl
     * @param string $ogImageUrl
     * @param string $title
     * @param string $description
     * @param string $keywords
     * @param string $footerContent
     * @param string $emailsSenderName
     * @param string $emailsSignatureContent
     * @param string $tos
     * @param string $cookiesHeadbandText
     * @param string $cookiesLinkText
     * @param string $cookiesPageContent
     */
    public function __construct($id, $faviconUrl, $logoUrl, $ogImageUrl, $title, $description, $keywords, $footerContent,
        $emailsSenderName, $emailsSignatureContent, $tos, $cookiesHeadbandText, $cookiesLinkText, $cookiesPageContent)
    {
        $this->id = $id;
        $this->faviconUrl = $faviconUrl;
        $this->logoUrl = $logoUrl;
        $this->ogImageUrl = $ogImageUrl;
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->footerContent = $footerContent;
        $this->emailsSenderName = $emailsSenderName;
        $this->emailsSignatureContent = $emailsSignatureContent;
        $this->tos = $tos;
        $this->cookiesHeadbandText = $cookiesHeadbandText;
        $this->cookiesLinkText = $cookiesLinkText;
        $this->cookiesPageContent = $cookiesPageContent;
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
    public function getFooterContent()
    {
        return $this->footerContent;
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
}
