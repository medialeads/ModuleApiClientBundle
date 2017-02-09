<?php

namespace Module\ApiClientBundle\ModulePage;

use Module\ApiClientBundle\Client\AbstractClient;
use Module\ApiClientBundle\Model\Response;
use Module\ApiCommonBundle\ModulePage\Request\Get;
use Module\ApiCommonBundle\ModulePage\Request\GetTransformer;

class ModulePageClient extends AbstractClient
{
    /**
     * @param Get $get
     * @param string $slug
     * @param string $format
     *
     * @return Response
     */
    public function get(Get $get, $slug, $format = 'json')
    {
        if (!in_array($format, array(
            'json',
            'xml'
        ))) {
            throw new \InvalidArgumentException();
        }

        return $this->apiHelper->get(sprintf('/api/module-page/%s/%s', $slug, $format), $format, GetTransformer::toParameters($get));
    }
}
