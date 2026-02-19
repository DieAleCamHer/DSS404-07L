<?php

class Pagina {

    protected $titulo;

    public function __construct($titulo){
        $this->titulo = $titulo;
    }

    protected function encabezado(){
        echo "<!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <title>$this->titulo</title>
            <style>
                body{ font-family: Arial; margin:0; }
                header{ background:#2c3e50; color:white; padding:20px; text-align:center;}
                nav{ background:#34495e; padding:10px; text-align:center;}
                nav a{ color:white; margin:0 15px; text-decoration:none; font-weight:bold;}
                nav a:hover{ color:#f1c40f; }
                section{ padding:20px; }
                footer{ background:#2c3e50; color:white; text-align:center; padding:15px; margin-top:20px;}
                table{ width:100%; border-collapse:collapse; }
                th,td{ border:1px solid #ccc; padding:10px; text-align:center; }
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

    protected function pie(){
        echo "<footer>
                © 2026 Universidad Demo
              </footer>
        </body>
        </html>";
    }
}
?>
