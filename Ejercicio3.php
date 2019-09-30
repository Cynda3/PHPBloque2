<html>
<head>
	<title>Ejericio 3</title>
</head>
<body>
	<?php

	$numeros = [];
	$suma = 0;

	for ($i=0; $i < 20; $i++) { 
		array_push($numeros, rand(1, 100));
		$suma += $numeros[$i];
	}

	natsort($numeros);

	print_r($numeros);

	$minNum = min($numeros);
	$maxNum = max($numeros);
	$media = $suma/count($numeros);

	echo ("<h4 style='color:blue'>$minNum</h4>");
	echo ("<h4 style='color:green'>$maxNum</h4>");
	echo ("<h6>La suma de todos los numeros es $suma</h6>");
	echo ("<h6>La media de los numeros del array es $media</h6>");
	

	?>


</body>
</html>
