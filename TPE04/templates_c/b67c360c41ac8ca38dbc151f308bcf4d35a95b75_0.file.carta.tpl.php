<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 10:32:27
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\carta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88091bec2c25_51219480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b67c360c41ac8ca38dbc151f308bcf4d35a95b75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\carta.tpl',
      1 => 1602750684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f88091bec2c25_51219480 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">


        <div class="imgBx">

            <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image_url;?>
" alt="">
            
        </div>
        <div class="contentBx">
            <h2><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</p>
            <p class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</p>
            <a href="#">Buy Now</a>
        </div>
    </div>
    <?php }
}
