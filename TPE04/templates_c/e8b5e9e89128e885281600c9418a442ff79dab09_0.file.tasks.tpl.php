<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 00:02:47
  from 'C:\xampp\htdocs\tasks-master\templates\tasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7ce987a6a763_71150961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b5e9e89128e885281600c9418a442ff79dab09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tasks-master\\templates\\tasks.tpl',
      1 => 1601592094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:createTask.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7ce987a6a763_71150961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">

          <ul class="list-group">

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas_s']->value, 'tarea');
$_smarty_tpl->tpl_vars['tarea']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
$_smarty_tpl->tpl_vars['tarea']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['tarea']->value->completed == 1) {?>
                    <li class="list-group-item list-group-item-success"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['tarea']->value->title, 'UTF-8');?>
<span class="badge badge-primary badge-pill"><?php echo $_smarty_tpl->tpl_vars['tarea']->value->description;?>
</span> <button type="button" class="btn btn-outline-danger"><a href="delete/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
">Borrar</a></button></li>
                <?php } else { ?>
                    <li class="list-group-item "><?php echo $_smarty_tpl->tpl_vars['tarea']->value->title;?>
<span class="badge badge-primary badge-pill"><?php echo $_smarty_tpl->tpl_vars['tarea']->value->description;?>
</span> <button type="button" class="btn btn-outline-danger"><a href="delete/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
">Borrar</a></button><button type="button" class="btn btn-outline-success"><a href="completar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
">Completar</a></button></li>    
                <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
          </ul>
          </div>

<?php $_smarty_tpl->_subTemplateRender("file:createTask.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>      

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
