<?php
/* Smarty version 3.1.39, created on 2022-10-06 15:22:32
  from 'C:\Users\54249\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE\templates\categoriesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_633ed6988c9951_43986194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4035b2eb357fee10d541b95ef4e6039947cb108a' => 
    array (
      0 => 'C:\\Users\\54249\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE\\templates\\categoriesList.tpl',
      1 => 1665062530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633ed6988c9951_43986194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group container-lg">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <button type="button"> <li> <?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
 </li> </button>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
