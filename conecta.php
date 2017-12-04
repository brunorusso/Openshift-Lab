<?php
#Define variaveis para conexao ao banco de dados

define('DB_HOST', getenv('MYSQL_PORT_3306_TCP_ADDR'));
define('DB_PORT', getenv('MYSQL_PORT_3306_TCP_PORT='));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASS'));
define('DB_DATABASE', getenv('DB_NAME'));

$dbhost = constant("DB_HOST"); // Host name 
$dbport = constant("DB_PORT"); // Host port
$dbusername = constant("DB_USER"); // MySQL username 
$dbpassword = constant("DB_PASSWORD"); // MySQL password 
$db_name = constant("DB_DATABASE"); // Database name 

$a = "dsdsds";


echo "$dbhost - $dbport -  $dbusername -  $dbpassword - $db_name"

?>
