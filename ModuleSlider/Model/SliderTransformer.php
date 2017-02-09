<?php

namespace Module\ApiCommonBundle\ModuleSlider\Model;

use Module\ApiClientBundle\ModuleSlider\Model\Slider;

class SliderTransformer
{
    /**
     * @param array $array
     *
     * @return array
     */
    public static function fromArray(array $array)
    {
        $sliders = array();

        foreach ($array as $row) {
            $imageUrl = null;
            if (isset($array['_image_path_url'])) {
                $imageUrl = $array['_image_path_url'];
            }

            $sliders[] = new Slider($row['id'], $imageUrl, $row['image_alt'], $row['link_url'], $row['blank_link']);
        }

        return $sliders;
    }
}
