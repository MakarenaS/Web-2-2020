<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 08:37:59
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\singleProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87ee4752bb30_80663469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aecccea7f0f6b37718c2205f04a239c46f81f98e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\singleProduct.tpl',
      1 => 1602743871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sideMenu.tpl' => 1,
    'file:filtro.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f87ee4752bb30_80663469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <section id="main" class="mainContent">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</h1>

            <?php $_smarty_tpl->_subTemplateRender("file:filtro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto_s']->value, 'product');
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
            <h2><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</p>
            <p class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</p>
            <a href="#">Buy Now</a>
        </div>
    </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>      

        <footer>
            <h2>Powered by us</h2>
        </footer>


        </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
