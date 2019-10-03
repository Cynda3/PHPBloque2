<!DOCTYPE html>
    <head>
        <title>Bloque1 PHP/4. Palindromo</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>4. Dado una palabra indica si es palindromo. Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha que de derecha a izquierda.</p>

        <?php
            $frase = "Isaac no ronca asi";

            //crea un array separando el string que recibe como entrada en base a los espacios en blanco que contiene. strtolower lo pasa todo a minuúscula.
            $separar = explode(" ", strtolower($frase));

            //Recorremos el array y creamos un string 'nuevo' con el contenido seguido
            foreach ($separar as $palabra)
                $nuevo .= $palabra;

            //Lo comparamos con el array a la inversa
            if ($nuevo == strrev($nuevo)) {
                echo "'".$frase."' SI es palíndromo";
            }
            else {
                echo "'".$frase."' NO es palíndromo";
            }

        ?>
    </body>
</html>