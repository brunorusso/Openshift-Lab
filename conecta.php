<?php
#Define variaveis para conexao ao banco de dados

define('DB_HOST', getenv('DB_BANCO'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASS'));
define('DB_DATABASE', getenv('DB_NAME'));

$dbhost = constant("DB_HOST"); // Host name 
$dbport = "3306"; // Host port
$dbusername = constant("DB_USER"); // MySQL username 
$dbpassword = constant("DB_PASSWORD"); // MySQL password 
$dbname = constant("DB_DATABASE"); // Database name 

?>
