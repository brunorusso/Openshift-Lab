<?php
define('dir', getenv('FILES'));

$dir    = constant ("dir");
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);
?>
