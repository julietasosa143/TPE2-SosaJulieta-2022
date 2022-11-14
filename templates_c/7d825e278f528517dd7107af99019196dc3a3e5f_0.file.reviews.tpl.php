<?php
/* Smarty version 3.1.39, created on 2022-11-14 21:03:06
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE2-SosaJulieta-2022\templates\reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63729efa653fa4_51981292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d825e278f528517dd7107af99019196dc3a3e5f' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE2-SosaJulieta-2022\\templates\\reviews.tpl',
      1 => 1668456183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63729efa653fa4_51981292 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
?>
    <div class="mb-3">
        <div>
        Usuario anonimo dijo:
        </div>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['review']->value->review;?>

        </div>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['review']->value->estrellas;?>
 Estellas
        </div>
        <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
            <button type="button" class="btn btn-outline-danger"> <a
                href="deleteReview/<?php echo $_smarty_tpl->tpl_vars['review']->value->id_review;?>
">Borrar</a></button>
        <?php }?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
