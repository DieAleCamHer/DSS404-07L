<?php
$host = $_SERVER['HTTP_HOST'];
$script = $_SERVER['PHP_SELF'];

$urlCompleta = $host.$script;

echo "LA dirección completa del script es:<br>";
echo $urlCompleta;
?>