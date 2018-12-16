<?php
require './lib/autoload.php';

//$email - new PHPMailer();

$smarty = new Template();

Rotas:: get_pagina();


//valores para o template
//$smarty->assign('NOME','MARLO');

$smarty->display('index.tpl');
?>