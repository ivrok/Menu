<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 23.09.2017
 * Time: 20:24
 */
namespace Menu;

class FileMenu extends \Menu\AbstractMenu implements \Menu\MenuInterface{
    public function __construct($name)
    {
        $this->menuName = $name;
        $this->menu = $this->getConfig();
        if (!$this->menu) throw new Exception('No menu ' . $name);
    }
    protected function getConfig()
    {
        $menuConfig = ROOT . '/menus/' . $this->menuName . '.php';
        if (!file_exists($menuConfig)) return false;
        return include $menuConfig;
    }
}