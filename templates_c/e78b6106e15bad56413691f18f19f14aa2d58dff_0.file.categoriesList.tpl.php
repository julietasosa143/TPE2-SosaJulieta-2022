<?php
/* Smarty version 3.1.39, created on 2022-10-05 04:38:10
  from 'C:\Users\Usuario\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE\templates\categoriesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_633cee120ed238_59090409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e78b6106e15bad56413691f18f19f14aa2d58dff' => 
    array (
      0 => 'C:\\Users\\Usuario\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE\\templates\\categoriesList.tpl',
      1 => 1664921172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_633cee120ed238_59090409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group container-lg">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <li> <?php echo $_smarty_tpl->tpl_vars['category']->value;?>
 </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
