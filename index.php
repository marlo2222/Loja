<?php
require './lib/autoload.php';

//$email - new PHPMailer();

$smarty = new Template();

Rotas:: get_pagina();


//valores para o template
//$smarty->assign('NOME','MARLO');
echo Rotas::pag_Carrinho() . '<br>';

$smarty->display('index.tpl');
?>