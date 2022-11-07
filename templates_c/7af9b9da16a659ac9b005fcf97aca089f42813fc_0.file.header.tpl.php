<?php
/* Smarty version 3.1.39, created on 2022-10-06 01:48:39
  from 'C:\Users\54249\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_633e17d7773f91_28679398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7af9b9da16a659ac9b005fcf97aca089f42813fc' => 
    array (
      0 => 'C:\\Users\\54249\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE\\templates\\header.tpl',
      1 => 1665013715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633e17d7773f91_28679398 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img\icons8-liga-de-leyendas-64.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"><?php echo '</script'; ?>
>
<base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de aromas</title>
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
        <h1>Tienda de aromas</h1>
        <div class="d-flex justify-content-end">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <div class="p-2 bd-highlight">
                        <li class="nav-item">
                            <a class="nav-link" href="index">Inicio</a>
                        </li>
                    </div>
                    <div class="p-2 bd-highlight">
                        <li class="nav-item">
                            <a class="nav-link" href="productos">Productos</a>
                        </li>
                    </div>
                    <div class="p-2 bd-highlight">
                        <li class="nav-item">
                            <a class="nav-link" href="categorias">Categorias</a>
                        </li>
                    </div>
                    <div class="p-2 bd-highlight">
                        <li class="nav-item">
                            <a class="nav-link" href="login">Iniciar sesion</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php }
}
