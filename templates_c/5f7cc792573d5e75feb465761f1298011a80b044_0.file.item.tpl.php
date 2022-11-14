<?php
/* Smarty version 3.1.39, created on 2022-11-14 21:01:44
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE2-SosaJulieta-2022\templates\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63729ea8e5ba18_78970174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f7cc792573d5e75feb465761f1298011a80b044' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE2-SosaJulieta-2022\\templates\\item.tpl',
      1 => 1668455463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/reviews.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63729ea8e5ba18_78970174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['items']->value->nombre;?>
 </h1>
<h2 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['items']->value->marca;?>
 </h2>
<p class="text-center lead"> <?php echo $_smarty_tpl->tpl_vars['items']->value->descripcion;?>
</p>
<p class="text-center"> <?php echo $_smarty_tpl->tpl_vars['items']->value->contenido;?>
</p>
<p class="text-center lead"> Categoria: <?php echo $_smarty_tpl->tpl_vars['items']->value->categoria;?>
</p>
<h3 class="text-center">$<?php echo $_smarty_tpl->tpl_vars['items']->value->precio;?>
</h3>

<h3 class="text-center">Reviews de este producto</h3>

<?php $_smarty_tpl->_subTemplateRender("file:templates/reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="js/api.js">

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
