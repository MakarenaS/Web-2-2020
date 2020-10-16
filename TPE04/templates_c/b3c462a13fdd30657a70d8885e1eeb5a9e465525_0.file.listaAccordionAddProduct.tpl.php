<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 02:04:32
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\listaAccordionAddProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88e390ec4c18_53900233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3c462a13fdd30657a70d8885e1eeb5a9e465525' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\listaAccordionAddProduct.tpl',
      1 => 1602806664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f88e390ec4c18_53900233 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="accordion">
    <form  id="productos_form_agregar" action="insert" method="post">
        <div class="accordionContentBx">
            <div id="label" class="label">Agregar Producto</div>
            <div class="content">
  

                <div class="containerForm">
                    <h2>Contact Us</h2>

                    <div class="inputBox">

                        <span class="text">Nombre del producto</span>
                        <input type="text" name="name" required>
                        <span class="line"></span>
                    </div>    
                    <div class="inputBox">

                        <span class="text">Descripcion del producto</span>
                        <input type="text" name="description" required>
                        <span class="line"></span>
                    </div>

                    <div class="inputBox">

                        <span class="text">Precio del producto</span>
                        <input type="number" name="price" required>
                        <span class="line"></span>
                    </div>


                    

                    <div class="inputBox textarea">

                        <span class="text">Imagen URL del producto</span>
                        <input type="text" name="image_url" required>
                        <span class="line"></span>
                    </div>

                
                    <div class="inputBox">
                    

                        <span class="text">Categoria SELECT</span>
                        <select name="id_category">
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


                    <button class="containerFormButton" type="submit">Agregar Producto</button>
                </div>
            </div>
        </div>      



    </form>

</div>



<?php }
}
