<!DOCTYPE html>
    <head>
        <title>Bloque1 PHP/2. Mayor</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>2. A partir de tres números, mostrar el mayor de ellos.</p>

        <?php
            //Obtenermos tres número aleatoriamente
            $num1 = rand(1,30);
            $num2 = rand(1,30);
            $num3 = rand(1,30);

            //Mostramos el mayor
            echo "El mayor de $num1, $num2 y $num3 es ". max ($num1,$num2,$num3);
        ?>

    </body>
</html>
