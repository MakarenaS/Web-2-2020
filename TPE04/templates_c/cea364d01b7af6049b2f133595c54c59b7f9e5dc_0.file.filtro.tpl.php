<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 09:11:14
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\filtro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f894792679875_31851139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea364d01b7af6049b2f133595c54c59b7f9e5dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\filtro.tpl',
      1 => 1602832272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f894792679875_31851139 (Smarty_Internal_Template $_smarty_tpl) {
?>  

<div class="filtro">
    <p>Filtros:</p>
    <ul>
<li>
            <a href="home">
            Home
            </a>
        </li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <li>
            <a href="productos/<?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
">
            <?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>

            </a>
        </li>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <li>
            <a href="admin">
            Admin
            </a>
        </li>

    </ul>
</div>

<?php }
}
