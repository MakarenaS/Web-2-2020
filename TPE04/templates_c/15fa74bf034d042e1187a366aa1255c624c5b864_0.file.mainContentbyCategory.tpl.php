<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 11:35:50
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\mainContentbyCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8817f615cf00_79670596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15fa74bf034d042e1187a366aa1255c624c5b864' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\mainContentbyCategory.tpl',
      1 => 1602754549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sideMenu.tpl' => 1,
    'file:filtro.tpl' => 1,
    'file:listaProductos.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8817f615cf00_79670596 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <h1>LLEGO</h1>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['category']->value->id_category;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['category_id']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 == $_prefixVariable2) {?>
                
            
            <?php $_smarty_tpl->_subTemplateRender("file:listaProductos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
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
