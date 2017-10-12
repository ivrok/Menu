<?php

/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 27.09.2017
 * Time: 18:03
 */
namespace Menu;

class Menu_render_picturemenu implements \Menu\Menu_render_interface {
    public function render($menu)
    {
        ob_start();
        ?>
        <nav>
            <table align="center" width="60%">
                <tr>
                    <? foreach ($menu as $mitem) echo $this->renderPictureItem($mitem); ?>
                </tr>
                <tr>
                    <? foreach ($menu as $mitem) echo $this->renderItem($mitem); ?>
                </tr>
            </table>
        </nav>
        <?
        return ob_get_clean();
    }
    protected function renderPictureItem($mItem)
    {
        ob_start();
        ?>
            <td align="center" width="20%"><a href="<?=$mItem['link'];?>"><img src="<?=$mItem['img'];?>" width="62" height="59" alt="<?=$mItem['name'];?>" /></a></td>
        <?
        return ob_get_clean();
    }
    protected function renderItem($mItem)
    {
        ob_start();
        ?>
            <td align="center"><a href="<?=$mItem['link'];?>"><?=$mItem['name'];?></a></td>
        <?
        return ob_get_clean();
    }

}