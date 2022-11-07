<?php

require_once 'libs/smarty-3.1.39/smarty-3.1.39/libs/Smarty.class.php';

class ItemsView
{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function renderItems($logged,$items, $categories)
    {
        $this->smarty->assign('titulo', "Lista de productos");
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('items', $items);
        $this->smarty -> assign('categorias', $categories);
        $this->smarty->display('templates/itemsList.tpl');
    
    }

    function renderItem($logged,$item)
    {
        $this->smarty->assign('items', $item);
        $this->smarty->assign('logged',$logged);
        $this->smarty->display('templates/item.tpl');
    }
    function redirectList()
    {
        header("Location: " . BASE_URL . "productos");
    }
}
