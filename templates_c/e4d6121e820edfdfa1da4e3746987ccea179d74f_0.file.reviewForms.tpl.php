<?php
/* Smarty version 3.1.39, created on 2022-11-11 18:05:08
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE2-SosaJulieta-2022\templates\reviewForms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_636e80c4197095_92229942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4d6121e820edfdfa1da4e3746987ccea179d74f' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE2-SosaJulieta-2022\\templates\\reviewForms.tpl',
      1 => 1668105895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e80c4197095_92229942 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <form action="addItem" method="POST" id="reviewForm">
    <div class="mb-3">
        <select class="form select" aria-label="Default select example" name="item">
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
        <textarea  placeholder="Su opinion del producto fue..." name="reviewBody" cols="30" rows="10"> </textarea>
    </div>
    <div class="mb-3">
        <select class="form-select " aria-label="Default select example" name="punctuation">
                <option value="0"> Sin estrellas</option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="Agregar">
    </div>
    </form>
</div><?php }
}
