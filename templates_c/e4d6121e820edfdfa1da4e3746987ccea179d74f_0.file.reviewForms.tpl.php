<?php
/* Smarty version 3.1.39, created on 2022-11-09 20:58:45
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE2-SosaJulieta-2022\templates\reviewForms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_636c06750a9aa0_26668554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4d6121e820edfdfa1da4e3746987ccea179d74f' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE2-SosaJulieta-2022\\templates\\reviewForms.tpl',
      1 => 1668023922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636c06750a9aa0_26668554 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <form action="add" method="POST" id="reviewForm">
    <div>
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
    <div>
        <textarea  placeholder="Su opinion del producto fue..." name="reviewBody" cols="30" rows="10"> </textarea>
    </div>
    <div>
        <select class="form-select " aria-label="Default select example" name="punctuation">
                <option value="0"> Sin estrellas</option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
        </select>
    </div>
    <div>
        <button id="submit-btn" class="btn btn-outline-secondary" type="button">Enviar</button>
    </div>
    </form>
</div><?php }
}