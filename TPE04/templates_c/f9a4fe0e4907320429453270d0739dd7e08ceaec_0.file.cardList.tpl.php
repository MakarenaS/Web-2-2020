<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 08:38:04
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\cardList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f854b4ccabca3_27987942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9a4fe0e4907320429453270d0739dd7e08ceaec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\cardList.tpl',
      1 => 1602571067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f854b4ccabca3_27987942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="cardList">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

    <div class="card">
        <div class="imgBx">
            <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image_url;?>
" alt="">
        </div>
        <div class="contentBx">
            <h2 class="name"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h2>
            <p class="description"><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</p>
            <p class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</p>
                        <a href="#">Comprar</a>
        </div>
    </div>    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
