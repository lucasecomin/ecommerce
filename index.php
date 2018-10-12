<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() { #chamad o caminho da raiz
    
	$page = new Page(); # cria uma nova pagina

	$page->setTpl("index"); #carrega conteudo

});

$app->run(); #tudo carregado? vamos rodar o codigo.

 ?>