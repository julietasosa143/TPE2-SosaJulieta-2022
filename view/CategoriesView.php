<?php

require_once 'libs/smarty-3.1.39/smarty-3.1.39/libs/Smarty.class.php';

class CategoriesView
{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function renderCategories($logged,$categories)
    {
        $this->smarty->assign('titulo', "Lista de categorias");
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('categorias', $categories);
        $this->smarty->display('templates/categoriesList.tpl');
    
    }
    function renderItemsByCategory($logged,$items, $category)
    {
        $this->smarty->assign('titulo', "Lista de productos en esta categoria: ");
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('categoria', $category);
        $this->smarty->assign('items', $items);
        $this->smarty->display('templates/itemsByCat.tpl');
    }
    function redirectList()
    {
        header("Location: " . BASE_URL . "categorias");
    }
}