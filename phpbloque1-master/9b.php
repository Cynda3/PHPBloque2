<!DOCTYPE html>
<html>
<head>
	<title>Bloque1 PHP/9. Comision</title>
	<meta charset="utf-8">
</head>
<body>
	<p>9. Queremos calcular la comisión de un vendedor. La comisión es el importe de las ventas más un porcentaje que va en función de la cantidad de ventas. <br>Si ha vendido menos de 10.000 € es un 5%, entre 10.000 y 20.000 un 8%, entre 20.000 y 40.000 un 10% y más de 40.000 un 13%.</p>

	<?php

	//Obtenermos el precio de venta aleatoriamente
	$importeVentas = rand (5000,60000);

	echo "Venta: $importeVentas € <br><br>";

	switch ($importeVentas) {
	case ($importeVentas<10000);
		$comision=$importeVentas*5/100;
		break;
	case ($importeVentas>=10000 && $importeVentas<20000);
		$comision=$importeVentas*8.5/100;
		break;
	case ($importeVentas>=20000 && $importeVentas<40000);
		$comision=$importeVentas*10/100;
		break;
	case ($importeVentas>=40000);
		$comision=$importeVentas*13/100;
		break;
	}
	echo "Comision $comision €";
	?>

</body>
</html>