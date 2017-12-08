<?php

namespace Module\ApiClientBundle\ModulePage\Model;

class PageTransformer
{
    /**
     * @param array $array
     *
     * @return Page
     */
    public static function fromArray(array $array)
    {
        return new Page($array['id'], $array['title'], $array['content'], $array['meta_title'], $array['meta_description']);
    }
}
