<!DOCTYPE html>
    <head>
        <title>Bloque1 PHP/3. Rango de edad</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>3. Dada una edad muestra el rango de valores en decenas entre las que se encuentra de 0 a 100.</p>

        <?php
            //Obtenermos la edad aleatoriamente
            $edad = rand(1,110);

            //Mostramos la edad
            echo "Edad: $edad <br><br>";
            if ($edad < 10)
                echo "Está entre 0-9";
            elseif ($edad < 20)
                echo "Está entre 10-19";
            elseif ($edad < 30)
                echo "Está entre 20-29";
            elseif ($edad < 40)
                echo "Está entre 30-39";
            elseif ($edad < 50)
                echo "Está entre 40-49";
            elseif ($edad < 60)
                echo "Está entre 50-59";
            elseif ($edad < 70)
                echo "Está entre 60-69";
            elseif ($edad < 80)
                echo "Está entre 70-79";
            elseif ($edad < 90)
                echo "Está entre 80-89";
            elseif ($edad < 100)
                echo "Está entre 90-99";
            else
                echo "Es mayor que 100";

        ?>
    </body>
</html>