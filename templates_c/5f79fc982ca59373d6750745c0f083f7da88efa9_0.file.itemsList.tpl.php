<?php
/* Smarty version 3.1.39, created on 2022-10-16 21:18:10
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE\templates\itemsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634c58f2ac6948_29544231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f79fc982ca59373d6750745c0f083f7da88efa9' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE\\templates\\itemsList.tpl',
      1 => 1665947879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/add_editForItems.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634c58f2ac6948_29544231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <div>
            <h3><button type="button" class="btn btn-outline-primary"><a
            href="item/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_item;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</a></button></h3>
        
            <h4>$ <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</h4>
            <button type="button">Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</button>
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                <button type="button" class="btn btn-outline-danger"> <a
                    href="deleteItem/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_item;?>
">Borrar</a></button>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/add_editForItems.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
