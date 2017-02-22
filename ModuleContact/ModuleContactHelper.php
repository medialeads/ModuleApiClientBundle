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
        list($encryptedPassword, $iv) = $this->getEncryptedPasswordAndIv($plainPassword);

        return new Login($username, $encryptedPassword, $iv);
    }

    /**
     * @param string $plainPassword
     *
     * @return array
     */
    public function getEncryptedPasswordAndIv($plainPassword)
    {
        return $this->apiCommonModuleContactHelper->getEncryptedPasswordAndIv($plainPassword, $this->encryptionKey);
    }

    /**
     * @param string $encryptedPassword
     * @param string $iv
     *
     * @return string
     */
    public function getDecryptedPassword($encryptedPassword, $iv)
    {
        return $this->apiCommonModuleContactHelper->getDecryptedPassword($encryptedPassword, $iv, $this->encryptionKey);
    }
}
