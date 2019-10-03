<html>
 <head>
  <title>Mayor</title>
 </head>
 <body>
 <?php
$a = 10;
$b = 8;
$c = 6;
if($a > $b && $a > $c){
    echo "<p>El mayor es $a</p>";
}
else if($b > $a && $b >$c){
    echo "<p>El mayor es $b</p>";
}
else{
    echo "<p>El mayor es $c</p>";
}

 ?>
 </body>
</html>