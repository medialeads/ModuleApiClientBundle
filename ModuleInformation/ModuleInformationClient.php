<?php

namespace Module\ApiClientBundle\ModuleInformation;

use Module\ApiClientBundle\Client\AbstractClient;
use Module\ApiClientBundle\Model\Response;
use Module\ApiCommonBundle\ModuleInformation\Request\Get;
use Module\ApiCommonBundle\ModuleInformation\Request\GetTransformer;

class ModuleInformationClient extends AbstractClient
{
    /**
     * @param Get $get
     * @param string $format
     *
     * @return Response
     */
    public function get(Get $get, $format = 'json')
    {
        if (!in_array($format, array(
            'json',
            'xml'
        ))) {
            throw new \InvalidArgumentException();
        }

        return $this->apiHelper->get(sprintf('/api/module-information/%s', $format), $format, GetTransformer::toParameters($get));
    }
}
