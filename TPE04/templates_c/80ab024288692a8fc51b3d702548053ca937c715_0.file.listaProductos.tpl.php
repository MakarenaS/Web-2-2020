<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 10:32:27
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\listaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88091beabb18_86912695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ab024288692a8fc51b3d702548053ca937c715' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\listaProductos.tpl',
      1 => 1602750568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:carta.tpl' => 1,
  ),
),false)) {
function content_5f88091beabb18_86912695 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="listaProductos">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <?php $_smarty_tpl->_subTemplateRender("file:carta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    

</div><?php }
}
