<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Promedios</title>
<style>
body{font-family:Arial;background:#f0fff0;padding:20px}
table{border-collapse:collapse;width:80%}
td,th{border:1px solid #333;padding:8px;text-align:center}
th{background:#ddd}
</style>
</head>
<body>

<h2>Promedio de estudiantes</h2>

<?php
$notas = [
"Christopher Tarantino" => ["Parcial"=>8.5,"Investigacion"=>7.5,"Tarea"=>9],
"Vladi Huacallí" => ["Parcial"=>6,"Investigacion"=>8,"Tarea"=>7],
"Andrés Yaperdí" => ["Parcial"=>9,"Investigacion"=>9,"Tarea"=>10]
];

echo "<table>";
echo "<tr>
<th>Alumno</th>
<th>Parcial</th>
<th>Investigación</th>
<th>Tarea</th>
<th>Promedio</th>
</tr>";

foreach($notas as $alumno=>$n){

    $promedio =
        $n["Parcial"]*0.2 +
        $n["Investigacion"]*0.3 +
        $n["Tarea"]*0.5;

    echo "<tr>
    <td>$alumno</td>
    <td>{$n["Parcial"]}</td>
    <td>{$n["Investigacion"]}</td>
    <td>{$n["Tarea"]}</td>
    <td>".number_format($promedio,2)."</td>
    </tr>";
}

echo "</table>";
?>

</body>
</html>