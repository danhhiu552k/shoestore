<?php


namespace App\Helpers;


class Menu
{
    public static function getParent($menus, $parent_id = 0, $char = '')
    {
        $html = '';
        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                $html .= ' <option value="' . $menu->id . '">' . $char . $menu->name . '</option> ';
                unset($menus[$key]);
                $html .= self::getParent($menus, $menu->id, $char . '--');
            }
        }
        return $html;
    }
}
