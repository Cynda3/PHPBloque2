<!DOCTYPE html>
<html>
<head>
	<title>Bloque1 PHP/5. Parque</title>
	<meta charset="utf-8">
</head>
<body>
    <p>5. Queremos controlar la entrada a una atracción del parque. Se pueden subir los mayores de 10 años o los que midan más de 120 cm. Si el menor está ‘acompañado’ se le permite subir a la atracción si la edad es mayor de 6 años, no importa la altura.</p>

	<?php
	//Obtenermos los datos de entrada aleatoriamente
	$edad = rand (1,15);
	$altura = rand (80,130);
	$adulto = rand(0,1);
	$adulto_bool = ($adulto) ? "TRUE" : "FALSE";

	echo "Edad: $edad  Altura: $altura  Acompañado/a: $adulto_bool <br><br>";
	if ($edad >= 10 or $altura >= 120)
		echo "Puede montar";
	elseif ($adulto and $edad >= 6)
		echo "Puede montar";
	else
		echo "No puede montar";
	?>

</body>
</html>