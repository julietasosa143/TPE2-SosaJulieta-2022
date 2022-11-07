<?php

require_once './view/GeneralView.php';
require_once './helpers/authHelper.php';


class GeneralController
{
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->view = new GeneralView();
        $this->authHelper = new AuthHelper();
    }

    function showHome()
    {
        $logged  = $this->authHelper->checkLoggedIn();
        $this->view->renderHome($logged);
    }
}