<?php
/* Smarty version 3.1.39, created on 2022-10-15 20:02:03
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634af59bc5cca7_01190443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df1e91dfb9d222853b246ee2270ea8c370e0d92f' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE\\templates\\error.tpl',
      1 => 1665856917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_634af59bc5cca7_01190443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1 class="text-center"> ¡ATENCION! </h1>
<p class="text-center lead"> Has dejado el formulario sin completar.
Tristemente, no podemos trabajar sin informacion
¡Completalo y vuelve a intentarlo!</p>



<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
