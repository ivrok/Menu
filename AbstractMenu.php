<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 23.09.2017
 * Time: 20:23
 */
namespace Menu;

class AbstractMenu {
    protected $menu = null;
    public function get()
    {
        return $this->menu;
    }
    public function getRendered(\Menu\Menu_render_interface $obj)
    {
        return $obj->render($this->menu);
    }
}