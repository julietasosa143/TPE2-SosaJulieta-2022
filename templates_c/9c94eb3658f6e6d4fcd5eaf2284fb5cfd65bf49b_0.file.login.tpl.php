<?php
/* Smarty version 3.1.39, created on 2022-11-14 21:26:29
  from 'C:\Users\julie\OneDrive\Documents\TUDAI\Web 2\xampp\htdocs\web2\TPE2-SosaJulieta-2022\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6372a47517a030_98003397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c94eb3658f6e6d4fcd5eaf2284fb5cfd65bf49b' => 
    array (
      0 => 'C:\\Users\\julie\\OneDrive\\Documents\\TUDAI\\Web 2\\xampp\\htdocs\\web2\\TPE2-SosaJulieta-2022\\templates\\login.tpl',
      1 => 1665868917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6372a47517a030_98003397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="d-flex justify-content-evenly">
    <div class="p-2 bd-highlight">
        <h2 class="text-center"> Inicio de sesión</h2>
        <form method="POST" action="validate">
            <div class="mb-3 text-center">
                <input placeholder="Ingrese su email" type="text" name="email" required>
            </div>
            <div class="mb-3 text-center">
                <input placeholder="Ingrese su contraseña" type="password" name="password" id="password" required>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" class="btn-submit" value="Iniciar sesión">
            </div>
        </form>
        <h4 class="alerta text-center"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
    </div>
</div>





<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
