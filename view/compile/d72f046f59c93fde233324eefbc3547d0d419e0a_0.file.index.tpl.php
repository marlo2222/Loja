<?php
/* Smarty version 3.1.33, created on 2018-12-17 18:28:36
  from 'C:\wamp64\www\Loja\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c17ead443c945_66557437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd72f046f59c93fde233324eefbc3547d0d419e0a' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja\\view\\index.tpl',
      1 => 1545071313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c17ead443c945_66557437 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/Loja/view/tema/css/bootstrap.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="http://localhost/Loja/view/tema/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="http://localhost/Loja/view/tema/js/bootstrap.js"><?php echo '</script'; ?>
>
    <title>Site</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="#">Top Ampla Opção</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Minha Conta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Carrinho</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Social</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">WhatsApp</a>
                            <a class="dropdown-item" href="#">twitter</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control ml-4 mr-2" type="search" name="" placeholder="Digite para buscar">
                    <button class="btn btn-default" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2 class="my-4">Categorias</h2>
                <div class="list-group">
                  <a href="#" class="list-group-item">Masculino</a>
                  <a href="#" class="list-group-item">Feminino</a>
                  <a href="#" class="list-group-item">Infantil</a>
                </div>
      
              </div>
        </div>
    </div>
</body>

</html><?php }
}
