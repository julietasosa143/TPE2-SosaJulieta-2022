<?php
/* Smarty version 3.1.39, created on 2022-10-15 20:54:04
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE\templates\item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_634b01cc7212b2_94586889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e0d94e0ff8e400ce71c823d4db851d6b1bed365' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE\\templates\\item.tpl',
      1 => 1665860040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634b01cc7212b2_94586889 (Smarty_Internal_Template $_smarty_tpl) {
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


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
