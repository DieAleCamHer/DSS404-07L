<?php

class Carreras {

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
                body{ font-family: Arial; margin:40px; }
                header{ background:#2c3e50; color:white; padding:15px; }
                nav a{ margin-right:15px; color:white; text-decoration:none; }
                section{ margin-top:20px; }
                table{ width:100%; border-collapse:collapse; margin-top:15px;}
                th,td{ border:1px solid #ccc; padding:10px; text-align:center;}
                footer{ margin-top:30px; background:#eee; padding:10px; text-align:center;}
            </style>
        </head>
        <body>";

        echo "<header>
                <h1>$this->titulo</h1>
                <nav>
                    <a href='home.php'>Home</a>
                    <a href='carreras.php'>Carreras</a>
                    <a href='institucional.php'>Institucional</a>
                    <a href='contacto.php'>Contacto</a>
                </nav>
              </header>";
    }

    public function contenido(){
        echo "<section>
                <h2>Nuestras Carreras</h2>
                <p>Ofrecemos programas académicos orientados a la tecnología y la innovación.</p>

                <table>
                    <tr>
                        <th>Carrera</th>
                        <th>Duración</th>
                        <th>Modalidad</th>
                    </tr>
                    <tr>
                        <td>Ingeniería en Sistemas</td>
                        <td>5 años</td>
                        <td>Presencial</td>
                    </tr>
                    <tr>
                        <td>Licenciatura en Informática</td>
                        <td>4 años</td>
                        <td>Semipresencial</td>
                    </tr>
                    <tr>
                        <td>Técnico en Desarrollo Web</td>
                        <td>2 años</td>
                        <td>Virtual</td>
                    </tr>
                </table>
              </section>";
    }

    public function pie(){
        echo "<footer>
                © 2026 Universidad Demo - Página Carreras
              </footer>
        </body>
        </html>";
    }
}

$pagina = new Carreras("Carreras");
$pagina->encabezado();
$pagina->contenido();
$pagina->pie();

?>
