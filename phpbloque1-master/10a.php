<!DOCTYPE html>
<html>
<head>
    <title>Bloque1 PHP/10. Tienda online</title>
    <meta charset="utf-8">
</head>
<body>
    <p>10. Disponemos de los siguientes datos:<br>
        - El importe de la cesta de la compra $total_compra, número con dos decimales. <br>
        - La variable $tipo_compra puede contener 'mascotas' o 'ropa'.<br>

        Escribe el código necesario para implementar:<br>
        Si la compra del cliente es inferior a 19 euros:<br>
        * si los productos son de mascotas se mostrará un mensaje: "No se puede realizar el envío".<br>
        * si los productos son de ropa se le mostrará el siguiente mensaje: "Los gastos de envío son 9 euros".<br>
        Si la compra tiene un importe entre 19 y 40 euros se le indicará el mensaje: "Los gastos de envío son 9 euros".<br>
        Si la compra supera los 40 euros deberemos indicar un mensaje de que los portes de envío son gratis.<br>
        Mostrar el precio final de la compra teniendo en cuenta que hay que añadir un 10% de iva si se trata de mascotas y un 21% si se trata de ropa.<br>
    </p>
    <?php

        $array_tipo_compra = array("ropa", "mascotas");
        $tipo_compra = array_rand($array_tipo_compra, 1);

        $total_compra = rand (2,100);

        if($total_compra < 19){
            if($tipo_compra == "mascota")
                echo "No se puede realizar envio";
            else
                echo "Los gastos de envio son 9 euros. <br>Precio final ". $total_compra*1.21 + 9 ."euros";
        }
        elseif ($total_compra < 40) {
            echo "Los gastos de envio son 9 euros <br>";
            if($tipo_compra == "mascota")
                echo "Precio final ". $total_compra*1.10 + 9 ." euros";
            else
                echo "Precio final ". $total_compra*1.21 + 9 ." euros";
        }
        elseif ($total_compra > 80) {
            echo "Los gastos de envio son gratuitos <br>";
            if($tipo_compra == "mascota")
                echo "Precio final ". $total_compra*1.10 ." euros";
            else
                echo "Precio final ". $total_compra*1.21 ." euros";
        }
     ?>
</body>
</html>