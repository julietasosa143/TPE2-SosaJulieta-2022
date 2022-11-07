<?php

require_once 'libs/smarty-3.1.39/smarty-3.1.39/libs/Smarty.class.php';

class LoginView{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function showFormLogin($logged, $error = null)
    {
        $this->smarty->assign('titulo', 'Log In');
        $this->smarty->assign('logged', $logged);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }

    function redirectHome()
    {
        header("Location: " . BASE_URL . "index");
    }
}