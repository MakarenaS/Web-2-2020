<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 10:50:53
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\listaAccordionEditProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f895eed0f70f4_81866036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab2dfaf768eb044993e6fe17b9dfcc339e0c8de9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\listaAccordionEditProduct.tpl',
      1 => 1602838199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f895eed0f70f4_81866036 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="accordion">
    
                <div class="accordionContentBx">
            <div id="label" class="label">Editar Precio del Producto a 1000</div>
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
                                <a href="edit/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">Edit</a>
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






 


<div class="accordion">
<form  id="productos_form_editar" action="editar" method="post">
<div class="accordionContentBx">
<div id="label" class="label">Editar todo el Producto</div>
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


<li id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" class="liSeleccionado">
<span><?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
</span>
<p><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</p>
<span><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</span>
<span style="filter: invert(1);"><?php echo $_smarty_tpl->tpl_vars['product']->value->id_category;?>
</span>
<img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->image_url;?>
" alt="">

</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</ul>
</div>

<div class="containerForm">
<h2>Editar</h2>
<div class="inputBox">

<span class="text">ID del producto (read only)</span>
<input id="inputID" type="text" name="id_productEdit" readonly>
<span class="line"></span>
</div> 
<div class="inputBox">

<span class="text">Nombre del producto</span>
<input id="inputNombre" type="text" name="nameEdit" required>
<span class="line"></span>
</div>    
<div class="inputBox">

<span class="text">Descripcion del producto</span>
<input id="inputDescripcion" type="text" name="descriptionEdit" required>
<span class="line"></span>
</div>

<div class="inputBox">
<span class="text">Precio del producto</span>
<input id="inputPrecio" type="number" name="priceEdit" required>
<span class="line"></span>
</div>

<div class="inputBox textarea">
<span class="text">Imagen URL del producto</span>
<input id="inputImg" type="text" name="image_urlEdit" required>
<span class="line"></span>
</div>


<div class="inputBox">


<span class="text">Categoria SELECT</span>
<select id="inputIdCatEdit" name="id_categoryEdit">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<span class="line"></span>
</div>


<button class="containerFormButton" type="submit">Editar Producto</button>
</div>
</div>
</div>      



</form>

</div>

 
<?php }
}
