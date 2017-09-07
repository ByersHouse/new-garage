<?php
error_reporting(E_ALL);
define('ROOT', dirname(__FILE__));
require_once ROOT.'/components/Loader.php';
spl_autoload_register('Loader');



$router = new Router();
$router->run();

 

