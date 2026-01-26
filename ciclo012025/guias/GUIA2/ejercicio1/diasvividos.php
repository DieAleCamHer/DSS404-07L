<?php
if (isset($_POST['calcular'])) {

    $anio = $_POST['anio'];
    $mes  = $_POST['mes'];
    $dia  = $_POST['dia'];

    // Fecha de nacimiento
    $fechaNacimiento = new DateTime("$anio-$mes-$dia");

    // Fecha actual
    $fechaActual = new DateTime(date("Y-m-d"));

    // Diferencia de fechas
    $diferencia = $fechaNacimiento->diff($fechaActual);

    // Total de días vividos
    $diasVividos = $diferencia->days;

    echo "<h2>Resultado</h2>";
    echo "Has vivido aproximadamente <strong>$diasVividos días</strong>.";
}
?>
