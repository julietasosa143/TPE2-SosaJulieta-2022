<?php
/* Smarty version 3.1.39, created on 2022-10-17 00:28:49
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE\templates\add_editForCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634c85a199b637_72545701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '652ef6ce9833ce217df00f11497665dad05ac55a' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE\\templates\\add_editForCategories.tpl',
      1 => 1665959256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c85a199b637_72545701 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
    <div class="d-flex justify-content-evenly">
        <div class="p-2 bd-highlight">
            <h3>Agregar Categoria</h3>
                <form action="addCategory" method="POST">
                    <div class="mb-3">
                        <input type="text" name="nombre" placeholder="Inserte nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="descripcion" placeholder="Inserte descripcion" required>
                    </div>
                    <input type="submit" value="Agregar">
                </form>
        </div>
        <div class="p-2 bd-highlight">
            <h3>Editar Categoria</h3>
                <form action="editCategory" method="POST">
                    <div class="mb-3">
                        <select name="id_categoria" class="form-select">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
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
                        <input type="text" name="descripcion" placeholder="Inserte nueva descripcion" required>
                    </div>
                    <input type="submit" value="Editar">
                </form>
        </div>
    </div><?php }
}
