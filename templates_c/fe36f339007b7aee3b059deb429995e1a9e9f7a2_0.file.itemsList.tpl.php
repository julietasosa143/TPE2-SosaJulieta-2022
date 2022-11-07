<?php
/* Smarty version 3.1.39, created on 2022-10-05 00:32:05
  from 'C:\Users\Usuario\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE\templates\itemsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_633cb465379c55_25741277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe36f339007b7aee3b059deb429995e1a9e9f7a2' => 
    array (
      0 => 'C:\\Users\\Usuario\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE\\templates\\itemsList.tpl',
      1 => 1664922722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633cb465379c55_25741277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="list-group container-lg">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Marca</td>
            <td>Descripcion</td>
            <td>Contenido</td>
            <td>Precio</td>
            <td>Categoria</td>
        </tr>
    </thead>
    <tbody>
        
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->contenido;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>
</table>



<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
