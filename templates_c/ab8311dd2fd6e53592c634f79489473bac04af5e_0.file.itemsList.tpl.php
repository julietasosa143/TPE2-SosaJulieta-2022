<?php
/* Smarty version 3.1.39, created on 2022-11-14 21:03:38
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE2-SosaJulieta-2022\templates\itemsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63729f1a422fb0_07697024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab8311dd2fd6e53592c634f79489473bac04af5e' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE2-SosaJulieta-2022\\templates\\itemsList.tpl',
      1 => 1668455789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/add_editForItems.tpl' => 1,
    'file:templates/reviewForms.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63729f1a422fb0_07697024 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php }?>
    <div>
        <h4>Podes dejarnos tu opinion del producto para colaborar con otros compradores! (esta aparecera cuando entres a un la descripcion de un producto)</h4>
    </div>
    </div>
    <div>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/reviewForms.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

<?php echo '<script'; ?>
 src="js/api.js">
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
