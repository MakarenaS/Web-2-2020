<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 00:01:55
  from 'C:\xampp\htdocs\tasks-master\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7ce953af1482_91312532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53053dbbe994ad97634a80e5a3d31514f7925771' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tasks-master\\templates\\login.tpl',
      1 => 1601592094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7ce953af1482_91312532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">

<div class="alert alert-danger" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>

       <form action="verifyUser" method="post">
                    <div class="form-group">
                        <label for="user">Ususario</label>
                        <input class="form-control" id="user" name="input_user" aria-describedby="emailHelp">
                
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="input_pass">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>

</div>

 

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
