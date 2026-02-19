<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio de Expresiones Regulares</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 40px;
        }
        .resultado{
            background:#f4f4f4;
            padding:15px;
            border-radius:8px;
        }
        .contador{
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
</head>

<body>

<h1>Uso de Expresiones Regulares</h1>

<h2>Buscador de Palabras</h2>

<?php
if (isset($_POST['Enviar'])) {

    $text = $_POST['comment'];
    $palabra = $_POST['palabra'];

    // Validar que no esté vacío
    if (!empty($palabra)) {

        // Patrón con delimitadores seguros
        $patron = "/\b(" . preg_quote($palabra, "/") . ")\b/i";

        // Contar coincidencias
        $coincidencias = preg_match_all($patron, $text);

        // Resaltar coincidencias
        $text = preg_replace($patron, '<span style="background:#5fc9f6">\1</span>', $text);

        echo "<div class='resultado'>";
        echo "<h3>Resultado 
                <span class='contador'>($coincidencias coincidencias encontradas)</span>
              </h3>";
        echo "<p>$text</p>";
        echo "</div>";

    } else {
        echo "<p style='color:red;'>Debe ingresar una palabra para buscar.</p>";
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>
        <label>Palabra a buscar:</label><br>
        <input type="text" name="palabra" required>
    </p>

    <p>
        <label>Ingrese el texto:</label><br>
        <textarea name="comment" cols="60" rows="10" required>
Sample sentence from KomunitasWeb, regex has become popular in web programming. Now we learn regex. According to wikipedia, Regular expressions are written in a formal language.
        </textarea>
    </p>

    <input type="submit" name="Enviar" value="Buscar">
</form>

</body>
</html>
