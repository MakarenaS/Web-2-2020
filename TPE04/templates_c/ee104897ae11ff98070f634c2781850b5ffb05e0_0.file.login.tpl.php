<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 19:38:28
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8737942c7d73_61285241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee104897ae11ff98070f634c2781850b5ffb05e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\login.tpl',
      1 => 1602697096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8737942c7d73_61285241 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/css/estiloLogin.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo_s']->value;?>
</title>
</head>

<body>
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

</body>
</html><?php }
}
