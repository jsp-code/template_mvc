<?php
/*apartir dessa linha iniciaremos 
uma secção e poderemos usar
$_SESSION["newsession"]*/
session_start();

define('BASEPATH', __DIR__.'/');

if($_SERVER['HTTP_HOST']!="localhost"){
   define('SUBDOMINIO',"/");
}else{
   define('SUBDOMINIO',"/".basename(__DIR__)."/");
}

require(BASEPATH."includes/erro_active.php");
require(BASEPATH."includes/urlEdit.php");
require(BASEPATH."includes/rotas.php");

$REQUEST_URI = $_SERVER["REQUEST_URI"];
$url = urlBasic($REQUEST_URI);
$GLOBALS["MYURL"] = $url;
$rota->goFrom($url);

