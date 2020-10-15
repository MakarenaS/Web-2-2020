<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 10:33:51
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88096f4f81f7_33293927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee104897ae11ff98070f634c2781850b5ffb05e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\login.tpl',
      1 => 1602750829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sideMenu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f88096f4f81f7_33293927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:sideMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <section id="main" class="mainContent">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</h1>

    <form action="#">

        <h2>Login</h2>

        <div class="input">

            <div class="inputBox">
                <label>Username</label>
                <input type="text" name="" placeholder="examply@xyz.com">
            </div>

            <div class="inputBox">
                <label>Password</label>
            
                <input type="text" name="" placeholder="xxxx">
            
            </div>
            
            <div class="inputBox">
                <input type="submit" name="" value="Sign In">
            </div>
        </div>
        <p class="forgot">Forgot Password?<a href="#">Click here</a></p>
    
    </form>

    </section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
