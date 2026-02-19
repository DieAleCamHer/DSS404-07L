<?php
require_once("pagina.php");

class Home extends Pagina {

    public function contenido(){
        echo "<section>
                <h2>Bienvenidos</h2>
                <p>Esta es la página principal del sitio web institucional.</p>
                <p>Aquí encontrará información sobre nuestras carreras, historia y contacto.</p>
              </section>";
    }

    public function mostrar(){
        $this->encabezado();
        $this->contenido();
        $this->pie();
    }
}

$pagina = new Home("Home");
$pagina->mostrar();
?>
