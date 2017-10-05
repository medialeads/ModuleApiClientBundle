<?php

namespace Module\ApiClientBundle\ModuleMenu;

use Module\ApiClientBundle\Client\AbstractClient;
use Module\ApiClientBundle\Model\Response;
use Module\ApiCommonBundle\ModuleMenu\Request\Get;
use Module\ApiCommonBundle\ModuleMenu\Request\GetTransformer;

class ModuleMenuClient extends AbstractClient
{
    /**
     * @param Get $get
     * @param string $routeKey
     * @param string $format
     *
     * @return Response
     */
    public function get(Get $get, $routeKey, $format = 'html')
    {
        if (!in_array($format, array(
            'html',
            'json',
            'xml'
        ))) {
            throw new \InvalidArgumentException();
        }

        return $this->apiHelper->get(sprintf('/api/module-menu/%s/%s', $routeKey, $format), $format, GetTransformer::toParameters($get));
    }
}
