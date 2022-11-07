<?php
/* Smarty version 3.1.39, created on 2022-10-28 18:54:44
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE-SosaJulieta-2022\templates\itemsByCat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_635c095476ff25_71815725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6ee6be6cc1e6e939bba67ab240c4b1d0691d33a' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE-SosaJulieta-2022\\templates\\itemsByCat.tpl',
      1 => 1665522404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_635c095476ff25_71815725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div>
    <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h2>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <li><button type="button"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</button>  <?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
  $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
