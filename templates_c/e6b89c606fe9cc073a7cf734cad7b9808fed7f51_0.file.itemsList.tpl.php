<?php
/* Smarty version 3.1.39, created on 2022-10-06 15:39:10
  from 'C:\Users\54249\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE\templates\itemsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_633eda7e1be555_02598954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6b89c606fe9cc073a7cf734cad7b9808fed7f51' => 
    array (
      0 => 'C:\\Users\\54249\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE\\templates\\itemsList.tpl',
      1 => 1665063549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633eda7e1be555_02598954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                <div>
                    <h3> <button type="button"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</button></h3>
                        <h4><?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</h4>
                        <p><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['producto']->value->contenido;?>
</p>
                        <h4>$ <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</h4>
                        <button type="button">Categoria<?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</button>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
   


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
