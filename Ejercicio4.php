<html>
<head>
	<title>Ejericio 4</title>
</head>
<body>
	<?php

	$sabores = "dulce salado amargo picante acido";
	$indices = explode(" ", $sabores);
	$longitudes = [];

	// Recorre el array para guardar la longitud de cada palabra en otro array
	for ($i=0; $i < count($indices); $i++) { 
		array_push($longitudes, strlen($indices[$i]));
	}

	// Convino los arrays indicando indice y valor
	$arrayAsociativo = array_combine($indices, $longitudes);

	print_r($arrayAsociativo);

	?>


</body>
</html>
