<?php

namespace Module\ApiClientBundle\Client;

use Module\ApiClientBundle\Helper\ApiHelper;

abstract class AbstractClient
{
    /**
     * @var ApiHelper
     */
    protected $apiHelper;

    /**
     * @param ApiHelper $apiHelper
     */
    public function setApiHelper(ApiHelper $apiHelper)
    {
        $this->apiHelper = $apiHelper;
    }
}
