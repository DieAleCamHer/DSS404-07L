<?php
require_once("pagina.php");

class Contacto extends Pagina {

    public function contenido(){
        echo "<section>
                <h2>Contáctanos</h2>
                <form method='post'>
                    <label>Nombre:</label><br>
                    <input type='text' name='nombre'><br><br>

                    <label>Email:</label><br>
                    <input type='email' name='email'><br><br>

                    <label>Mensaje:</label><br>
                    <textarea name='mensaje' rows='5' cols='40'></textarea><br><br>

                    <input type='submit' value='Enviar'>
                </form>
              </section>";
    }

    public function mostrar(){
        $this->encabezado();
        $this->contenido();
        $this->pie();
    }
}

$pagina = new Contacto("Contacto");
$pagina->mostrar();
?>
