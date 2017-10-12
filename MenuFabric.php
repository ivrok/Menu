<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 23.09.2017
 * Time: 3:54
 */
namespace Menu;

class MenuFabric {
    public static function getMenu($type, $name)
    {
        switch ($type) {
            case 'db' : break;
            case 'file':
            default:
                return new \Menu\FileMenu($name);
        }
    }
}