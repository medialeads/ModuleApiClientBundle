<?php

namespace Module\ApiClientBundle\ModuleContact;

use Module\ApiClientBundle\Client\AbstractClient;
use Module\ApiClientBundle\Model\Response;
use Module\ApiCommonBundle\ModuleContact\Request\Create;
use Module\ApiCommonBundle\ModuleContact\Request\CreateTransformer;
use Module\ApiCommonBundle\ModuleContact\Request\Edit;
use Module\ApiCommonBundle\ModuleContact\Request\EditTransformer;
use Module\ApiCommonBundle\ModuleContact\Request\Login;
use Module\ApiCommonBundle\ModuleContact\Request\LoginTransformer;
use Module\ApiCommonBundle\ModuleContact\Request\RequestPasswordRecover;
use Module\ApiCommonBundle\ModuleContact\Request\RequestPasswordRecoverTransformer;
use Module\ApiCommonBundle\ModuleContact\Request\SubmitPasswordRecover;
use Module\ApiCommonBundle\ModuleContact\Request\SubmitPasswordRecoverTransformer;

class ModuleContactClient extends AbstractClient
{
    /**
     * @param Login $login
     * @param string $format
     *
     * @return Response
     */
    public function login(Login $login, $format = 'json')
    {
        if (!in_array($format, array(
            'json',
            'xml'
        ))) {
            throw new \InvalidArgumentException();
        }

        return $this->apiHelper->get(sprintf('/api/module-contact/login/%s', $format), $format, LoginTransformer::toParameters($login));
    }

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

        return $this->apiHelper->post(sprintf('/api/module-contact/create/%s', $format), $format, CreateTransformer::toParameters($create));
    }

    /**
     * @param Edit $edit
     * @param int $id
     * @param string $format
     *
     * @return Response
     */
    public function edit(Edit $edit, $id, $format = 'json')
    {
        if (!in_array($format, array(
            'json',
            'xml'
        ))) {
            throw new \InvalidArgumentException();
        }

        return $this->apiHelper->post(sprintf('/api/module-contact/edit/%s/%s', $id, $format), $format, EditTransformer::toParameters($edit));
    }

    /**
     * @param RequestPasswordRecover $requestPasswordRecover
     * @param string $format
     *
     * @return Response
     */
    public function requestPasswordRecover(RequestPasswordRecover $requestPasswordRecover, $format = 'json')
    {
        if (!in_array($format, array(
            'json',
            'xml'
        ))) {
            throw new \InvalidArgumentException();
        }

        return $this->apiHelper->get(sprintf('/api/module-contact/request-password-recover/%s', $format), $format, RequestPasswordRecoverTransformer::toParameters($requestPasswordRecover));
    }

    /**
     * @param SubmitPasswordRecover $submitPasswordRecover
     * @param string $token
     * @param string $format
     *
     * @return Response
     */
    public function submitPasswordRecover(SubmitPasswordRecover $submitPasswordRecover, $token, $format = 'json')
    {
        if (!in_array($format, array(
            'json',
            'xml'
        ))) {
            throw new \InvalidArgumentException();
        }

        return $this->apiHelper->get(sprintf('/api/module-contact/submit-password-recover/%s/%s', $token, $format), $format, SubmitPasswordRecoverTransformer::toParameters($submitPasswordRecover));
    }
}
