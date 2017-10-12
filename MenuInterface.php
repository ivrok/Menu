<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 23.09.2017
 * Time: 20:23
 */
namespace Menu;

interface MenuInterface {
    public function get();
    public function getRendered(\Menu\Menu_render_interface $obj);
}