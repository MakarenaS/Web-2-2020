<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 01:29:41
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\listaAccordionDeleteProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88db65688375_16167099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '330067b8db35aec61c50415dd33b78ff8f83269c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\listaAccordionDeleteProduct.tpl',
      1 => 1602804580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f88db65688375_16167099 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="accordion">
    
            <div class="accordionContentBx">
            <div id="label" class="label">Borrar Producto</div>
            <div class="content">

                <div class="listBox">

                    <h2>Lista de productos</h2>


                    <ul>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        
                    
                        <li>
                        <span><?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
</span>
                        <?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>

                        <span><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</span>
                        <span style="filter: invert(1);"><?php echo $_smarty_tpl->tpl_vars['product']->value->id_category;?>
</span>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image_url;?>
" alt="">
                        <button type="button">
                                <a href="delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">Borrar</a>
                            </button> 
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                    </ul>
                </div>

            </div>
        </div>      



    

</div>


<?php }
}
