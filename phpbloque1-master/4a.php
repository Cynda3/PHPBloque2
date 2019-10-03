<!DOCTYPE html>
    <head>
        <title>Bloque1 PHP/4. Palindromo</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>4. Dado una palabra indica si es palindromo. Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha que de derecha a izquierda.</p>

        <?php
            $cadena = "Isaac no ronca así";
            echo "Cadena Original: $cadena <br><br>";

            //Quitar espacios en blanco
            $cadena = str_replace(' ', '', $cadena);

            //Sustituir tildes
            $cadena = str_replace(
                    array('á', 'é', 'í', 'ó', 'ú'),
                    array('a', 'e', 'i', 'o', 'u'),
                    $cadena
                );

            //Convertir a minusculas
            $cadena = strtolower ($cadena);

            echo "Cadena Original Convertida: $cadena <br><br>";

            //Invertir cadena
            $cadenareves = strrev($cadena);
            echo "Cadena del revers: $cadenareves<br><br>";

            if ($cadena==$cadenareves) echo "SI es palindroma<br>";
            else echo "NO es palindroma<br>";
        ?>
    </body>
</html>