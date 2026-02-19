<?php

class Institucional {

    private $titulo;

    public function __construct($titulo){
        $this->titulo = $titulo;
    }

    public function encabezado(){
        echo "<!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <title>$this->titulo</title>
            <style>
                body{ font-family: Verdana; margin:0; }
                header{ background:#16a085; color:white; padding:20px; text-align:center;}
                nav{ background:#1abc9c; padding:10px; text-align:center;}
                nav a{ margin:0 15px; color:white; text-decoration:none; font-weight:bold;}
                .contenedor{ display:flex; padding:20px;}
                .lado{ width:30%; padding:15px; background:#ecf0f1;}
                .principal{ width:70%; padding:15px;}
                footer{ background:#16a085; color:white; text-align:center; padding:15px;}
            </style>
        </head>
        <body>";

        echo "<header>
                <h1>$this->titulo</h1>
              </header>

              <nav>
                    <a href='home.php'>Home</a>
                    <a href='carreras.php'>Carreras</a>
                    <a href='institucional.php'>Institucional</a>
                    <a href='contacto.php'>Contacto</a>
              </nav>";
    }

    public function contenido(){
        echo "<div class='contenedor'>
                <div class='lado'>
                    <h3>Misión</h3>
                    <p>Formar profesionales competentes con valores éticos.</p>

                    <h3>Visión</h3>
                    <p>Ser una institución líder en educación superior.</p>
                </div>

                <div class='principal'>
                    <h2>Historia Institucional</h2>
                    <p>Nuestra institución fue fundada con el propósito de impulsar la educación tecnológica en el país.</p>

                    <img src='https://via.placeholder.com/400x200' alt='Imagen institucional'>
                </div>
              </div>";
    }

    public function pie(){
        echo "<footer>
                © 2026 Universidad Demo - Página Institucional
              </footer>
        </body>
        </html>";
    }
}

$pagina = new Institucional("Institucional");
$pagina->encabezado();
$pagina->contenido();
$pagina->pie();

?>
