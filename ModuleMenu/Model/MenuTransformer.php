<?php

namespace Module\ApiCommonBundle\ModuleMenu\Model;

use Module\ApiClientBundle\ModuleMenu\Model\Menu;
use Module\ApiClientBundle\ModuleMenu\Model\MenuElement;

class MenuTransformer
{
    /**
     * @param array $array
     *
     * @return Menu
     */
    public static function fromArray(array $array)
    {
        $menuElements = $array;
        foreach ($array['menu_elements'] as $row) {
            $menuElements[] = new MenuElement($row['id'], $row['label'], $row['link_url'], $row['blank_link'], $row['position']);
        }

        return new Menu($array['id'], $menuElements);
    }
}
