<?php
/* Smarty version 3.1.39, created on 2022-10-17 00:22:35
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE\templates\categoriesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634c842b64e6b2_58889235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3ece646e3ebbd5d7b2af4e559fdf8a5fca946c0' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE\\templates\\categoriesList.tpl',
      1 => 1665958947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/add_editForCategories.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634c842b64e6b2_58889235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <h3>~~Lista de categorias</h3>
    <p>Clickee sobre la categoria deseada para inspeccionarla</p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
         <h4> <button type="button"><a href="showItemsInCat/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</a></button></h4>
         <p><?php echo $_smarty_tpl->tpl_vars['category']->value->descripcion;?>
</p>
         <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
            <button type="button" class="btn btn-outline-danger"> <a
                href="deleteCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
">Borrar</a></button>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/add_editForCategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
