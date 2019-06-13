<?php
define('dir', getenv('FILES'));

$dir    = constant ("dir");
$files1 = scandir($dir);

print_r($files1);
?>
