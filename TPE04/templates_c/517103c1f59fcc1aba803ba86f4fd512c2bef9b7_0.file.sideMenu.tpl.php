<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 06:10:30
  from 'C:\xampp\htdocs\Web-2-2020\TPE04\templates\sideMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87cbb663a300_46669510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '517103c1f59fcc1aba803ba86f4fd512c2bef9b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-2-2020\\TPE04\\templates\\sideMenu.tpl',
      1 => 1602735028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f87cbb663a300_46669510 (Smarty_Internal_Template $_smarty_tpl) {
?> <div id="mySidenav" class="sidenav">

        <!--INICIO CLOSE MENU -->
        <a href="javascript:void(0)" id="buttonCloseNav" class="closebtn">&times;</a>
        <!--FIN CLOSE MENU -->
        
        <div class="imgBx">
            <img src="templates/img/user.jpeg" alt="">
        </div>
        <div class="contentBx">
            <h2 class="userName">
                Ignacio Ochoa
            </h2>
            <h3 class="userType">
                Usuario Administrador
            </h3>
            <div class="buttonBx">
                <a href="#">Log in</a>
                <a href="#">Administrar</a>
                <a href="#">Log out</a>
            </div>
        </div>
    </div>

    <!-- FIN SIDE MENU -->
    <!-- SPAN PARA abrir side menu -->
    <span id="buttonOpenNav">
        <img src="templates/img/logo.png" alt="">
    </span>

    <!-- FIN SPAN OPEN/CLOSE SIDE MENU --><?php }
}
