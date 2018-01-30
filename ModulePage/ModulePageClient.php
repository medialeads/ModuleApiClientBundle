<?php

namespace Module\ApiClientBundle\ModulePage;

use Module\ApiClientBundle\Client\AbstractClient;
use Module\ApiClientBundle\Model\Response;
use Module\ApiCommonBundle\ModulePage\Request\_List;
use Module\ApiCommonBundle\ModulePage\Request\Get;
use Module\ApiCommonBundle\ModulePage\Request\GetTransformer;
use Module\ApiCommonBundle\ModulePage\Request\ListTransformer;

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

        return $this->apiHelper->get(sprintf('/api/module-page/get/%s/%s', $slug, $format), $format, GetTransformer::toParameters($get));
    }

    /**
     * @param _List $list
     * @param string $format
     *
     * @return Response
     */
    public function _list(_List $list, $format = 'json')
    {
        if (!in_array($format, array(
            'json',
            'xml'
        ))) {
            throw new \InvalidArgumentException();
        }

        return $this->apiHelper->get(sprintf('/api/module-page/list/%s', $format), $format, ListTransformer::toParameters($list));
    }
}
