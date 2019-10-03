<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php

// Se rellena el array de los pisos
for($i=1;$i<6;$i++){
$pisos[]=$i;
};
// Se rellena el array de las puertas
for($i=1;$i<5;$i++){
$puertas[]=$i;
};

// Dentro del bucle de los pisos se ejecuta el bucle de las puertas, y se muestra así por pantalla
foreach($pisos as $altura){
foreach($puertas as $lados){
	echo("piso ");
	echo($altura);
echo(" ---> ");
	echo("puerta ");
	echo($lados);
	echo("<br>");
	};
echo("<br>");
};

?>
</body>
</html>
