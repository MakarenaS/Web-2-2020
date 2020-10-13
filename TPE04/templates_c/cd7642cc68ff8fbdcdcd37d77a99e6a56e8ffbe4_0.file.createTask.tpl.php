<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 00:02:47
  from 'C:\xampp\htdocs\tasks-master\templates\createTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7ce987a82e04_44229363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd7642cc68ff8fbdcdcd37d77a99e6a56e8ffbe4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tasks-master\\templates\\createTask.tpl',
      1 => 1601592094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7ce987a82e04_44229363 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
                <form action="insert" method="post">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input class="form-control" id="title" name="input_title" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Titulo de la Tarea</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <input class="form-control" id="description" name="input_description">
                    </div>
                    <div class="form-group">
                        <label for="priority">Prioridad</label>
                        <input type="number" class="form-control" id="priority"  name="input_priority">
                        </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="input_completed" name="input_completed">
                        <label class="form-check-label" for="completed">Completada</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div><?php }
}
