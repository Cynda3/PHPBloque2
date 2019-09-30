<html>
<head>
	<title>Ejericio 1</title>
</head>
<body>
	<?php

	$naturales = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

	$factoriales = [];
	$naturalFactorizado = 0;

	// Recorro el array de naturales para hacer el factorial de cada uno
	for ($i=0; $i < count($naturales); $i++) { 
		array_push($factoriales, Factorial($naturales[$i]));
	}

	var_dump($factoriales);

	// funcion para sacar el factorial de un numero
	function Factorial($num){ 
    $factorial = 1; 
    for ($i = 1; $i <= $num; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
	} 
	   
		

	?>


</body>
</html>
