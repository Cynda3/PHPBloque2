<html>
<head>
	<title>Ejericio 7</title>
</head>
<body>
	<?php

	$nombreArchivo = "config.php";

	function EstaElArchivo($archivo){
		if (file_exists($archivo)) {
			echo "El archivo ".$archivo." existe";
		}else{
			echo "No existe el archivo ".$archivo;
		}
	}

	echo (EstaElArchivo($nombreArchivo));

	?>


</body>
</html>
