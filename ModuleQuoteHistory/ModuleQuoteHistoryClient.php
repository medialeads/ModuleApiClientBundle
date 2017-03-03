<?php

namespace Module\ApiClientBundle\ModuleQuoteHistory;

use Module\ApiClientBundle\Client\AbstractClient;
use Module\ApiClientBundle\Model\Response;
use Module\ApiCommonBundle\ModuleQuoteHistory\Request\Create;
use Module\ApiCommonBundle\ModuleQuoteHistory\Request\CreateTransformer;

class ModuleQuoteHistoryClient extends AbstractClient
{
    /**
     * @param Create $create
     * @param string $format
     *
     * @return Response
     */
    public function create(Create $create, $format = 'json')
    {
        if (!in_array($format, array(
            'json',
            'xml'
        ))) {
            throw new \InvalidArgumentException();
        }

        return $this->apiHelper->post(sprintf('/api/module-quote-history/create/%s', $format), $format, CreateTransformer::toParameters($create));
    }
}
