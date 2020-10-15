<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 11:33:28
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\listaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8817689507d8_14151428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ab024288692a8fc51b3d702548053ca937c715' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\listaProductos.tpl',
      1 => 1602754335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:carta.tpl' => 1,
  ),
),false)) {
function content_5f8817689507d8_14151428 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="listaProductos">
 <h2><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</h2>
 
 <div class="cartaBx">
    <?php $_smarty_tpl->_subTemplateRender("file:carta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>



</div>
   

<?php }
}
