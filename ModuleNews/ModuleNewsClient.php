<?php

namespace Module\ApiClientBundle\ModuleNews;

use Module\ApiClientBundle\Client\AbstractClient;
use Module\ApiClientBundle\Model\Response;
use Module\ApiCommonBundle\ModuleNews\Request\_List;
use Module\ApiCommonBundle\ModuleNews\Request\Get;
use Module\ApiCommonBundle\ModuleNews\Request\GetTransformer;
use Module\ApiCommonBundle\ModuleNews\Request\ListTransformer;

class ModuleNewsClient extends AbstractClient
{
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

        return $this->apiHelper->get(sprintf('/api/module-news/list/%s', $format), $format, ListTransformer::toParameters($list));
    }

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

        return $this->apiHelper->get(sprintf('/api/module-news/get/%s/%s', $slug, $format), $format, GetTransformer::toParameters($get));
    }
}
