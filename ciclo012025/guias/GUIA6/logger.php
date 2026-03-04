<?php
// Nombre del archivo de log
$logfile = 'visits.log';

// Obtener datos de la visita
$ip = $_SERVER['REMOTE_ADDR'];  // IP del visitante
$script = $_SERVER['PHP_SELF'];  // Nombre del script ejecutado
$time = date('Y-m-d H:i:s');     // Fecha y hora actual

// Formato de la entrada: IP | Script | Tiempo
$entry = "$ip | $script | $time\n";

// Agregar al archivo (crea el archivo si no existe)
file_put_contents($logfile, $entry, FILE_APPEND);

// Contenido de la página (para probar, muestra un mensaje simple)
echo "<h1>Bienvenido al sitio</h1>";
echo "<p>Tu visita ha sido registrada.</p>";
echo "<a href='admin_view.php'>Ver log (solo para admin)</a>";
?>