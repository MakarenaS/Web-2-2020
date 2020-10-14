<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 14:26:57
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f86ee910c6211_07890061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '956448523708a567e42fda6263a7c142d70f0c94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\product.tpl',
      1 => 1602678413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f86ee910c6211_07890061 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card" id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">
        <h2><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</p>
        <div class="imgBx">
            <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image_url;?>
" alt="">
        </div>
        <div class="buttons"></div>
    </div>





<?php }
}
