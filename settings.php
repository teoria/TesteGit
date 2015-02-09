<?php
$engine = 'mysql';
$host = "mysql.plataformasigma.com.br";
$user = "appprofessor";
$pass = "abc431faba"; 
$database = "barauna_sigma";

 
  
/**
* Caminhos do Sistema
*
*/

define('VIEW_PATH','../../app/view');
define('CONTROLLER_PATH','../../app/controller');
define('MODEL_PATH','../../app/model');
define('VENDOR_PATH','../../vendor/autoload.php');
define('CKFINDER_PATH','http://joaocorreia.plataformasigma.com.br/painel/resources/ckfinder/');

/**
* Configurações do sistema
*
*/

$baseClass = "MainController";  // Método index da classe MainController será invocado quando o route "/" for chamado

$erroHandler = "MainController:notFound";

$basePath = "http://www.plataformasigma.com.br/remote"; // Diretório base para os arquivos de imagem, css e js.
$materiaisPath = "MateriaisController:getMateriais";
$debug = true;
