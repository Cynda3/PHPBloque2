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


            //Comparamos los numeros y vamos almacenando el numero mayor en variable mayor
            if ($mayor<=$num1)
                $mayor=$num1;
            if ($mayor<=$num2)
                $mayor=$num2;
            if ($mayor<=$num3)
                $mayor=$num3;

            //Mostramos el mayor
            echo "El mayor de $num1, $num2 y $num3 es $mayor";
        ?>

    </body>
</html>
