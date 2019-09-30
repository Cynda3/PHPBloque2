<html>
<head>
	<title>Ejericio 9</title>
</head>
<body>
	<?php

	$lados = [];

	for ($i=0; $i < 5; $i++) { 
		array_push($lados, rand(-10, 10));
	}

	for ($i=0; $i < count($lados); $i++) { 
		echo (AreaCuadrado($lados[$i])."<br> ");
	}
	

	function AreaCuadrado($num){
		if ($num <= 0) {
			return $num*$num;
		}else{
			return "El lado tiene que ser un numero positivo";
		}
	}

	?>


</body>
</html>
