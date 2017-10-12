<?php

/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 27.09.2017
 * Time: 17:56
 */

namespace Menu;

class Menu_render implements \Menu\Menu_render_interface{
    public function render($menu)
    {
        ob_start();
        ?>
        <nav>
            <ul class="menu">
                <? foreach ($menu as $mItem) echo $this->renderItem($mItem);?>
            </ul>
        </nav>
        <?
        return ob_get_clean();
    }
    protected function renderItem($mItem)
    {
        ob_start();
        ?>
        <li <?=isset($mItem['class']) ? 'class=' . $mItem['class'] : '';?>>
            <?
            if (isset($mItem['link']) && $mItem['link']) :
            ?>
            <a href="<?=$mItem['link'];?>">
                <?
                else :
                ?>
                <span>
            <?
            endif;

            echo $mItem['name'] . PHP_EOL;

            if (isset($mItem['items']) && count($mItem['items'])) :
                ?>
                <ul>
                    <?
                    foreach ($mItem['items'] as $mmitem) {
                        echo $this->renderItem($mmitem);
                    }
                    ?>
                </ul>
                <?
            endif;

            if (isset($mItem['link']) && $mItem['link']) :
            ?>
            </a>
            <?
            else :
            ?>
            </span>
            <?
            endif;
            ?>
        </li>
        <?
        return ob_get_clean();
    }
}