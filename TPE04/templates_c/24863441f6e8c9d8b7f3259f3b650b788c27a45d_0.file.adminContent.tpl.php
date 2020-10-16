<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-16 02:04:32
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\adminContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88e390e92895_94233038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24863441f6e8c9d8b7f3259f3b650b788c27a45d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\adminContent.tpl',
      1 => 1602806669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sideMenu.tpl' => 1,
    'file:filtro.tpl' => 1,
    'file:listaAccordionAddProduct.tpl' => 1,
    'file:listaAccordionDeleteProduct.tpl' => 1,
    'file:listaAccordionEditProduct.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f88e390e92895_94233038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <section id="main" class="mainContent">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</h1>

            <?php $_smarty_tpl->_subTemplateRender("file:filtro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
            

            
            <?php $_smarty_tpl->_subTemplateRender("file:listaAccordionAddProduct.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:listaAccordionDeleteProduct.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:listaAccordionEditProduct.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 



                        
        <footer>
            <h2>Powered by us</h2>
        </footer>

        </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
