<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 08:29:19
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\cardList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f85493f949920_94662598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9a4fe0e4907320429453270d0739dd7e08ceaec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\cardList.tpl',
      1 => 1602570558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f85493f949920_94662598 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="cardList">



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

</div>
<?php }
}
