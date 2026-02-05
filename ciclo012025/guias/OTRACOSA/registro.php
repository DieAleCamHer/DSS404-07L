<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro academico</title>
</head>
<body>
    <h2>Promedio de notas con Estado</h2>

    <?php
    $notas = [
        "Christopher Tarantino" => ["Nota 1"=>5.5, "Nota 2"=>4, "Nota 3"=>7],
        "Vladi Huacallí" => ["Nota 1"=>3, "Nota 2"=>1, "Nota 3"=>9],
        "Andrés Yaperdí" => ["Nota 1"=>5, "Nota 2"=>8, "Nota 3"=>8]
    ];
    echo "<table>";
    echo "<tr>
    <th>Nombre</th>
    <th>Nota 1</th>
    <th>Nota 2</th>
    <th>Nota 3</th>
    <th>Promedio</th>
    <th>Estado</th>
    </tr>";

    foreach ($notas as $alumno => $n) {
        $promedio =
            $n["Nota 1"]*0.2 +
            $n["Nota 2"]*0.3 +
            $n["Nota 3"]*0.5;
        
        echo "<tr>
        <td>$alumno</td>
        <td>{$n["Nota 1"]}</td>
        <td>{$n["Nota 2"]}</td>
        <td>{$n["Nota 3"]}</td>
        <td>".number_format($promedio,2)."</td>
        <td>"; 
            if ($promedio >= 6) {
                echo "Aprobado";
            } else {
                echo "Desaprobado";
            }
        "</td></tr>";
    }

    echo "</table>"
    ?>
</body>
</html>