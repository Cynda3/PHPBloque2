<html>
<head>
	<title>Ejericio 7</title>
</head>
<body>
	<?php

	$base = rand(1, 10);
	$exponente = rand(1, 10);
	

	function CalcPotencia($base, $exponente = 2){
		$potencia = 1;
		for ($i=0; $i < $exponente; $i++) { 
			$potencia *= $base;
		}
		return $potencia;
	}

	echo(CalcPotencia($base));

	?>


</body>
</html>
