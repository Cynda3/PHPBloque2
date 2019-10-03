<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio PHP/7.EnteroPositivo</title>
</head>
<body>

    <?php
    $primerN = rand(10, 20);
    echo "<p><b>Primer numero:</b> $potencia</p><br>";
    do{
        if($primerN == 1){
            break;
        }
        else {
            echo $primerN.", ";
            if (esPar($primerN))
                $primerN = $primerN / 2;
            else
                $primerN = ($primerN * 3) + 1;
        }
    }
    while($primerN >= 1);
    echo "1.";

    function esPar($numero){
        $par = false;
        if($numero % 2 == 0)
            $par = true;
        else
            $par = false;
        return $par;
    }
	?>
</body>
</html>