<!DOCTYPE html>
<html>
<head>
	<title>Bloque1 PHP/6. Potencias</title>
	<meta charset="utf-8">
</head>
<body>
	<p>6. Dada una potencia y una cantidad mostrar los números, su potencia, mientras la potencia sea menor que la cantidad. </p>

	<?php

	//Obtenermos los datos de entrada aleatoriamente
	$potencia = rand (1,9);
	$cantidad = rand (100,500);

	echo "Potencia: $potencia  Cantidad: $cantidad<br><br>";

	//Mostramos las potencias mientras no superen cantidad
	for($i = 1; pow($i, $potencia) < $cantidad; $i++)
		echo "$i^$potencia = ".pow($i, $potencia)."<br>";
	?>

</body>
</html>