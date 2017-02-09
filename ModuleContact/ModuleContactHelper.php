<?php

namespace Module\ApiClientBundle\ModuleContact;

use Module\ApiCommonBundle\ModuleContact\ModuleContactHelper as ApiCommonModuleContactHelper;
use Module\ApiCommonBundle\ModuleContact\Request\Login;

class ModuleContactHelper
{
    /**
     * @var ApiCommonModuleContactHelper
     */
    private $apiCommonModuleContactHelper;

    /**
     * @var string
     */
    private $encryptionKey;

    /**
     * @param ApiCommonModuleContactHelper $apiCommonModuleContactHelper
     * @param string $encryptionKey
     */
    public function __construct(ApiCommonModuleContactHelper $apiCommonModuleContactHelper, $encryptionKey)
    {
        $this->apiCommonModuleContactHelper = $apiCommonModuleContactHelper;
        $this->encryptionKey = $encryptionKey;
    }

    /**
     * @param string $username
     * @param string $plainPassword
     *
     * @return Login
     */
    public function getLoginRequest($username, $plainPassword)
    {
        list($encryptedPassword, $iv) = $this->apiCommonModuleContactHelper->getEncryptedPasswordAndIv($plainPassword, $this->encryptionKey);

        return new Login($username, $encryptedPassword, $iv);
    }
}
