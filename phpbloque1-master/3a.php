<!DOCTYPE html>
    <head>
        <title>Bloque1 PHP/3. Rango de edad</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>3. Dada una edad muestra el rango de valores en decenas entre las que se encuentra de 0 a 100.</p>

        <?php
            //Obtenermos la edad aleatoriamente
            $edad = rand(1,99);

            //Mostramos la edad
            echo "Edad: $edad <br><br>";

            $unidad = floor($edad/10);

            echo "Está entre ".($unidad*10)." y ".($unidad*10+9)."<br><br>";

        ?>
    </body>
</html>