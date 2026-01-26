<?php
echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Fecha y Hora</title>";
echo "</head>";
echo "<body>";

echo "<h2>Fecha y hora del servidor</h2>";

$fecha = date("d/m/Y");
$hora = date("H:i:s");

echo "<p><strong>Fecha:</strong> $fecha</p>";
echo "<p><strong>Hora:</strong> $hora</p>";

echo "</body>";
echo "</html>";
?>