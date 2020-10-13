<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 09:10:48
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8552f8648892_68249666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be6182a0970a0a03327eb8dab745855189c6665' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\navbar.tpl',
      1 => 1602573041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8552f8648892_68249666 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="navbar">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
<li>
<p><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</p>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
