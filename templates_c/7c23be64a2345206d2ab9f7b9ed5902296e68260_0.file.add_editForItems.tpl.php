<?php
/* Smarty version 3.1.39, created on 2022-10-17 01:09:28
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE\templates\add_editForItems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634c8f285682b1_76015121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c23be64a2345206d2ab9f7b9ed5902296e68260' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE\\templates\\add_editForItems.tpl',
      1 => 1665961599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c8f285682b1_76015121 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
    <div class="d-flex justify-content-evenly">
        <div class="p-2 bd-highlight">
            <h3>Agregar Item</h3>
                <form action="addItem" method="POST">
                    <div class="mb-3">
                        <input type="text" name="nombre" placeholder="Inserte nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="marca" placeholder="Inserte marca" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="descripcion" placeholder="Inserte descripcion" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="contenido" placeholder="Inserte contenido en mililitros" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="precio" placeholder="Inserte precio" required>
                    </div>
                    <div class="mb-3">
                        <select name="id_categoria" class="form-select">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
-<?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <input type="submit" value="Crear">
                </form>
        </div>
        <div class="p-2 bd-highlight">
            <h3>Editar Item</h3>
                <form action="editItem" method="POST">
                    <div class="mb-3">
                        <select name="id_item" class="form-select">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_item;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->id_item;?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nombre" placeholder="Inserte el nuevo nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="marca" placeholder="Inserte marca" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="descripcion" placeholder="Inserte descripcion" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="contenido" placeholder="Inserte contenido en mililitros" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="precio" placeholder="Inserte precio" required>
                    </div>
                    <div class="mb-3">
                        <select name="id_categoria" class="form-select">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
-<?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <input type="submit" value="Editar">
                </form>
        </div>
    </div><?php }
}
