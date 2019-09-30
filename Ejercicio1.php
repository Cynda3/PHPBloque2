<html>
<head>
	<title>Ejericio 7</title>
</head>
<body>
	<?php

	$num = rand(2,50);

	while ($num != 1) {
		echo "$num </br>";
		if ($num%2==0) {
			$num = $num/2;
		}else{
			$num = $num*3+1;
		}
	}
		echo "$num </br>";

	

	?>


</body>
</html>
