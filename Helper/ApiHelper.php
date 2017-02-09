<?php

namespace Module\ApiClientBundle\Helper;

use Lsw\ApiCallerBundle\Call\ApiCallInterface;
use Lsw\ApiCallerBundle\Call\HttpGetHtml;
use Lsw\ApiCallerBundle\Call\HttpGetJson;
use Lsw\ApiCallerBundle\Call\HttpGetXML;
use Lsw\ApiCallerBundle\Call\HttpPostJson;
use Lsw\ApiCallerBundle\Caller\ApiCallerInterface;
use Module\ApiClientBundle\Call\HttpPostXml;
use Module\ApiClientBundle\Model\Response;

class ApiHelper
{
    /**
     * @var ApiCallerInterface
     */
    private $apiCaller;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @param ApiCallerInterface $apiCaller
     * @param string $baseUrl
     */
    public function __construct(ApiCallerInterface $apiCaller, $baseUrl)
    {
        $this->apiCaller = $apiCaller;
        $this->baseUrl = $baseUrl;
    }

    /**
     * @param string $url
     * @param string $format
     * @param array $parameters
     *
     * @return Response
     */
    public function get($url, $format, array $parameters = array())
    {
        switch ($format) {
            case 'html':
                return $this->getHTML($url, $parameters);

                break;
            case 'json':
                return $this->getJSON($url, $parameters);

                break;
            case 'xml':
                return $this->getXML($url, $parameters);

            default:
                throw new \InvalidArgumentException();
        }
    }

    /**
     * @param string $url
     * @param string $format
     * @param array $parameters
     *
     * @return Response
     */
    public function post($url, $format, array $parameters = array())
    {
        switch ($format) {
            case 'json':
                return $this->postJSON($url, $parameters);

                break;
            case 'xml':
                return $this->postXML($url, $parameters);

                break;
            default:
                throw new \InvalidArgumentException();
        }
    }

    /**
     * @param string $url
     * @param array $parameters
     *
     * @return Response
     */
    public function getHTML($url, array $parameters = array())
    {
        return $this->call(new HttpGetHtml($this->baseUrl . $url, null, $parameters));

    }

    /**
     * @param string $url
     * @param array $parameters
     *
     * @return Response
     */
    public function getJSON($url, array $parameters = array())
    {
        return $this->call(new HttpGetJson($this->baseUrl . $url, $parameters, true));
    }

    /**
     * @param string $url
     * @param array $parameters
     *
     * @return Response
     */
    public function getXML($url, array $parameters = array())
    {
        return $this->call(new HttpGetXML($this->baseUrl . $url, $parameters, true));
    }

    /**
     * @param string $url
     * @param array $parameters
     *
     * @return Response
     */
    public function postJSON($url, array $parameters = array())
    {
        return $this->call(new HttpPostJson($this->baseUrl . $url, $parameters, true));
    }

    /**
     * @param string $url
     * @param array $parameters
     *
     * @return Response
     */
    public function postXML($url, array $parameters = array())
    {
        return $this->call(new HttpPostXml($this->baseUrl . $url, $parameters, true));
    }

    /**
     * @param ApiCallInterface $call
     *
     * @return Response
     */
    public function call(ApiCallInterface $call)
    {
        $response = $this->apiCaller->call($call);

        return new Response(intval($this->apiCaller->getLastStatus()), $response);
    }
}
