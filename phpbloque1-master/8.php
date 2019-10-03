<!DOCTYPE html>
<html>
<head>
	<title>Bloque1 PHP/8. Piramide</title>
	<meta charset="utf-8">
</head>
<body>
	<p>
		8. Implementa el código que dada una variable ‘base’ que tiene que ser impar, imprima la siguiente figura:
	<center>
		   <br>*
		  <br>***
		 <br>*****
		<br>*******
	</center>
	</p>

	<?php

	// Generamos un numero aleatorio y nos aseguramos de que sea impar
     do {
        $base = rand(5, 25);
     } while ( $base % 2 == 0 );

     echo "Base de la piramide $base<br><br>";

	if($base % 2 != 0 and $base > 0) {
		$centro = floor($base/2);
		for ($i = 1; $i <= $base; $i = $i + 2) {
			for ($j = 1; $j <= $centro; $j = $j + 1)
				echo "&nbsp&nbsp";
			for ($j = 1; $j <= $i; $j = $j + 1)
				echo "*";
			echo "<br>";
			$centro = $centro -1;
		}
	}
	else
		echo "Base inapropiada";

	?>

</body>
</html>