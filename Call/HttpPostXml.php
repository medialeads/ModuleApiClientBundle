<?php

namespace Module\ApiClientBundle\Call;

use Lsw\ApiCallerBundle\Call\HttpPostJson;

class HttpPostXml extends HttpPostJson
{
    // copié du HttpGetXML
    public function parseResponseData()
    {
        if ($this->asAssociativeArray) {
            $xml = simplexml_load_string($this->responseData);
            $json = json_encode($xml);
            $this->responseObject = json_decode($json, true);
        } else {
            $this->responseObject = $this->responseData;
        }
    }
}
