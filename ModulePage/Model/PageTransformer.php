<?php

namespace Module\ApiCommonBundle\ModulePage\Model;

use Module\ApiClientBundle\ModulePage\Model\Page;

class PageTransformer
{
    /**
     * @param array $array
     *
     * @return Page
     */
    public static function fromArray(array $array)
    {
        return new Page($array['id'], $array['title'], $array['content']);
    }
}
