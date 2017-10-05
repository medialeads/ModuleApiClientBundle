<?php

namespace Module\ApiClientBundle\ModuleNews\Model;

class NewsTransformer
{
    /**
     * @param array $array
     *
     * @return News
     */
    public static function fromArray(array $array)
    {
        return new News($array['id'], $array['title'], $array['content'], $array['_image_path_url'], new \DateTime($array['starting_display_date']), $array['slug']);
    }

    /**
     * @param array $rootArray
     *
     * @return array
     */
    public static function fromRootArray(array $rootArray)
    {
        $news = array();
        foreach ($rootArray as $row) {
            $news[] = self::fromArray($row);
        }

        return $news;
    }
}
