<?php
$nombre = "Diego Alejandro Campos Hernández";
$lugar = "Zacatecoluca, El Salvador";
$edad = 19;
$carnet = "CH252968";

$tabla = <<<HEREDOC
<table border="1" cellpadding="8">
    <tr>
        <th>Dato</th>
        <th>Información</th>
    </tr>
    <tr>
        <td>Nombre completo</td>
        <td>$nombre</td>
    </tr>
    <tr>
        <td>Lugar de nacimiento</td>
        <td>$lugar</td>
    </tr>
    <tr>
        <td>Edad</td>
        <td>$edad</td>
    </tr>
    <tr>
        <td>Carnet</td>
        <td>$carnet</td>
    </tr>
</table>
HEREDOC;

echo $tabla;
?>