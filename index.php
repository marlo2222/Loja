<?php
require './lib/autoload.php';

//$email - new PHPMailer();

$smarty = new Template();


//valores para o template
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
//echo Rotas::get_SiteTEMA();
// echo Rotas::pag_Carrinho() . '<br>';
//$smarty-> assing('GET_TEMA', Rotas::get_SiteTEMA());xao
$dados = new Conexao();
$slq = "SELECT * FROM categorias";
$dados->ExecuteSQL($slq);
echo $dados->TotalDados();

$smarty->display('index.tpl');
?>