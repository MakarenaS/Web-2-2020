<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 14:47:01
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f86f345429526_86324952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be6182a0970a0a03327eb8dab745855189c6665' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\navbar.tpl',
      1 => 1602679619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f86f345429526_86324952 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="navbar">
        
        <a href="#">
            <img src="templates/img/logo.png" alt="logo" class="logo">
        </a>
        
        <div id="toggleMenuAction" class="toggleMenu"></div>
        
        <ul class="navigation">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">All Products</a>
            </li>
            <li>
                <a href="#">All Categories</a>
            </li>
            <li class="loginButton" id="loginButton">
                <a href="#">Login</a>
            </li>
        </ul>

    </header>
<?php }
}
