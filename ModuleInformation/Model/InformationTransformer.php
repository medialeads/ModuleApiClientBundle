<?php

namespace Module\ApiCommonBundle\ModuleInformation\Model;

use Module\ApiClientBundle\ModuleInformation\Model\Information;

class InformationTransformer
{
    /**
     * @param array $array
     *
     * @return Information
     */
    public static function fromArray(array $array)
    {
        $faviconUrl = null;
        if (isset($array['_favicon_path_url'])) {
            $faviconUrl = $array['_favicon_path_url'];
        }

        $logoUrl = null;
        if (isset($array['_logo_path_url'])) {
            $faviconUrl = $array['_logo_path_url'];
        }

        $ogImageUrl = null;
        if (isset($array['_og_image_path_url'])) {
            $ogImageUrl = $array['_og_image_path_url'];
        }

        return new Information($array['id'], $faviconUrl, $logoUrl, $ogImageUrl, $array['title'], $array['description'],
            $array['keywords'], $array['footer_content'], $array['emails_sender_name'],
            $array['emails_signature_content'], $array['tos'], $array['cookies_headband_text'],
            $array['cookies_link_text'], $array['cookies_page_content']);
    }
}
