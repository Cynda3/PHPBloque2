<!DOCTYPE html>
<html>
    <head>
    	<title>Bloque1 PHP/1.Comunidad</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>1. Dados el número de pisos y de puertas, realiza un listado de
        las viviendas de la comunidad.</p>

    	<?php
            //Calculamos aleatoriamente pisos y puertas de un edificio
        	$pisos = rand(1,10);
            $puertas = rand(2, 8);
            $letras = ["A","B","C","D","E","F","G","H"];

            //Mostramos los datos calculados
            echo "Numero de pisos: $pisos <br>
                  Numero de puertas: $puertas <br>
                  <h4>Listado de viviendas:</h4>";

            //Recorremos por cada piso el numero de puertas
            for ($i = 1; $i <= $pisos; $i++){
                for ($j = 0; $j < $puertas; $j++){
                    echo "Piso $i - Puerta $letras[$j]<br>";
                }
                echo "<br>";
            }
    	?>
    </body>
</html>

