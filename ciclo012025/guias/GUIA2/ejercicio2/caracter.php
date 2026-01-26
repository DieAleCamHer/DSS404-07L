<?php
if (isset($_POST['verificar'])) {

    $caracter = $_POST['caracter'];

    if (preg_match("/^[aeiouáéíóúAEIOUÁÉÍÓÚ]$/", $caracter)) {
        echo "<p>El carácter ingresado es una <strong>vocal</strong>.</p>";
    }
    elseif (preg_match("/^[bcdfghjklmnñpqrstvwxyzBCDFGHJKLMNÑPQRSTVWXYZ]$/", $caracter)) {
        echo "<p>El carácter ingresado es una <strong>consonante</strong>.</p>";
    }
    elseif (preg_match("/^[0-9]$/", $caracter)) {
        echo "<p>El carácter ingresado es un <strong>número</strong>.</p>";
    }
    elseif (preg_match("/^[.,;:()\"'!¡¿?#$%&]$/", $caracter)) {
        echo "<p>El carácter ingresado es un <strong>símbolo</strong>.</p>";
    }
    else {
        echo "<p><strong>El carácter ingresado no se puede procesar</strong>.</p>";
    }
}
?>
