# Menu
Fabric menu.

```
//TYPE_MENU can be file now and in future it will be also db.
\Menu\MenuFabric::getMenu(TYPE_MENU, 'bottom_menu')->getRendered(new \Menu\Menu_render());

//file menu expects that in root directory /menu will be config of a menu.
/*
return array(
    array('name' => 'Lembrete', 'items' => array(
       array('name' => 'Principal', 'link' => '/Lembrete/showlist'),
       array('name' => 'Novo', 'link' => '/Lembrete/addnew'),
       array('name' => 'Editar', 'link' => '/Lembrete/editlist'),
       array('name' => 'Excluir', 'link' => '/Lembrete/showlistd'),
    )),
    array('name' => 'Nova Empresa', 'items' => array(
       array('name' => 'Principal'),
       array('name' => 'Novo', 'link' => '/Empresa/addnew'),
       array('name' => 'Editar'),
       array('name' => 'Excluir'),
    )),
    array('name' => 'Vencidos | Pagos', 'items' => array(
       array('name' => 'Principal', 'link' => '/pg_01_vencidos.php'),
       array('name' => 'Editar'),
       array('name' => 'Excluir'),
    )),
);
*/
```
