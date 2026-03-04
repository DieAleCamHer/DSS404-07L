<?php
// Nombre del archivo de log
$logfile = 'visits.log';

// Verificar si el archivo existe
if (file_exists($logfile)) {
    // Leer el archivo como array de líneas
    $lines = file($logfile);
    
    // Mostrar tabla HTML
    echo "<h1>Log de Visitas</h1>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>IP</th><th>Script Ejecutado</th><th>Fecha y Hora</th></tr>";
    
    // Recorrer cada línea
    foreach ($lines as $line) {
        // Dividir la línea por el separador '|'
        $data = explode('|', trim($line));  // trim() elimina espacios extras
        
        if (count($data) == 3) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($data[0]) . "</td>";  // IP
            echo "<td>" . htmlspecialchars($data[1]) . "</td>";  // Script
            echo "<td>" . htmlspecialchars($data[2]) . "</td>";  // Tiempo
            echo "</tr>";
        }
    }
    
    echo "</table>";
} else {
    echo "<p>No hay visitas registradas aún.</p>";
}
?>