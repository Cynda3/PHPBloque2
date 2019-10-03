<!DOCTYPE html>
<html>
<head>
	<title>Bloque1 PHP/7. Entero positivo</title>
	<meta charset="utf-8">
</head>
<body>
	<p>7. Implementar la siguiente operación, aplicable a cualquier número entero positivo:</p>
	Si el número es par, se divide entre 2.<br>
	Si el número es impar, se multiplica por 3 y se suma 1.<br>

	<p>Al final siempre obtenemos uno.
	Ejemplo:  13, 40, 20, 10, 5, 16, 8, 4, 2, 1.
	</p>

	<?php

	//Obtenermos los datos de entrada aleatoriamente
	$num = rand (2,20);

	echo "Numero: $num<br><br>";

	while($num != 1){
        if($num % 2 == 0)
            $num = $num/2;
        else
            $num = ($num*3+1);
        $cadena.=$num.', ';
	}
	$cadena [strlen($cadena)-2]='.';
	echo $cadena;
    ?>

</body>
</html>