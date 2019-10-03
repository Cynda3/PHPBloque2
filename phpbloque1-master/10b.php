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
        Mostrar el precio final de la compra teniendo en cuenta que hay que añadir un 10% de iva si se trata de mascotas y un 21% si se trata de ropa.<br><br><br>
    </p>
    <?php

        $array_tipo_compra = array("ropa", "mascotas");
        $rand_tipo_compra = rand(0,1);

        $tipo_compra=$array_tipo_compra[$rand_tipo_compra];
        $total_compra = rand (2,100);
        $gastos_envio=0;

        echo "Total compra: $total_compra €<br>";
        echo "Tipo compra: $tipo_compra<br><br>";

        if($total_compra < 19){
            if($tipo_compra == "mascotas")
                echo "No se puede realizar envio";
            else {
                $gastos_envio=9;
                $iva=21;
            }
        }
        else {
            $iva=($tipo_compra == "mascotas")? 10 : 21;
            if ($total_compra < 40)
                $gastos_envio=9;
        }

        if ($iva>=0) {
            echo "Gastos de envio: $gastos_envio € <br> IVA: $iva %<br>";
            $total_gasto=$total_compra+$total_compra*(int)$iva/100 + $gastos_envio;
            echo "Total gasto $total_gasto €<br><br>";
        }

     ?>
</body>
</html>