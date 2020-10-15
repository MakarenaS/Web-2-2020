<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 11:31:32
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\filtro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8816f42ee458_75183187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea364d01b7af6049b2f133595c54c59b7f9e5dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\filtro.tpl',
      1 => 1602752626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8816f42ee458_75183187 (Smarty_Internal_Template $_smarty_tpl) {
?>

    

<div class="filtro">
    <p>Filtros:</p>
    <ul>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
">
            <?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>

            </a>
        </li>
        
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </ul>
</div>

<?php }
}
