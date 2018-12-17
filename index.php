<?php
require './lib/autoload.php';

//$email - new PHPMailer();

$smarty = new Template();

Rotas:: get_pagina();


//valores para o template
//echo Rotas::get_SiteTEMA();
// echo Rotas::pag_Carrinho() . '<br>';
//$smarty-> assing('GET_TEMA', Rotas::get_SiteTEMA());

$smarty->display('index.tpl');
?>