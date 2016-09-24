<?php

defined('DB_SERVER')? null : define ("DB_SERVER","localhost");
defined('DB_USER')? null : define ("DB_USER","root");
defined('DB_PASS')? null : define ("DB_PASS","");
defined('DB_NAME')? null : define ("DB_NAME","Customers");

require_once '/../vendor/twig/twig/lib/Twig/Autoloader.php';   #'/path/to/lib/Twig/Autoloader.php';
Twig_Autoloader::register();


$loader = new Twig_Loader_Filesystem('theme/templates/admin'); // relative path
$twig = new Twig_Environment($loader, array(
    
    'cache'       => 'theme/templates/cache',
    'auto_reload' => true
));



?>