<?php

namespace Module\ApiClientBundle\Model;

class Response
{
    /**
     * @var int
     */
    private $statusCode;

    /**
     * @var mixed
     */
    private $data;

    /**
     * @var bool
     */
    private $success;

    /**
     * @param int $statusCode
     * @param mixed $data
     */
    public function __construct($statusCode, $data)
    {
        $this->statusCode = $statusCode;
        $this->data = $data;
        $this->success = $statusCode >= 200 && $statusCode < 300;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->success;
    }
}
