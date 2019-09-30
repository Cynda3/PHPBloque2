<html>
<head>
	<title>Ejericio 2</title>
</head>
<body>
	<?php

	$filas = rand(1, 10);
	$columnas = rand(1,10);

	echo(CrearTabla($filas, $columnas));

	function CrearTabla($filas, $columnas){

		echo "<table>";
		for ($i=1; $i <= $filas; $i++) { 
			echo "<tr>";
			for ($j=1; $j <= $columnas; $j++) { 
				echo "<td>Fila $i , columna $j -  </td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	?>


</body>
</html>
