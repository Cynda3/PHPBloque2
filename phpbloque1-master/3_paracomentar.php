<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>

 <?php 
        $numero = rand(1,200);
        echo $numero."<br>";
        if($numero<=10){
            echo "El numero esta en el rango de 1 y 10";
        }
            elseif($numero >=10 && $numero <=20){
                echo "El numero esta en el rango de 10 y 20";
            }
            elseif($numero >=20 && $numero <=30){
                echo "El numero esta en el rango de 20 y 30";
            }
            elseif($numero >=30 && $numero <=40){
                echo "El numero esta en el rango de 30 y 40";
            }
            elseif($numero >=40 && $numero <=50){
                echo "El numero esta en el rango de 40 y 50";
            }
            elseif($numero >=50 && $numero <=60){
                echo "El numero esta en el rango de 50 y 60";
            }
            elseif($numero >=60 && $numero <=70){
                echo "El numero esta en el rango de 60 y 70";
            }
            elseif($numero >=70 && $numero <=80){
                echo "El numero esta en el rango de 70 y 80";
            }
            elseif($numero >=80 && $numero <=90){
                echo "El numero esta en el rango de 80 y 90";
            }
            elseif($numero >=90 && $numero <=100){
                echo "El numero esta en el rango de 90 y 100";
            }
            else{
                echo "El numero tiene que estar entre el 1 y el 100";
            }

         
 ?>
 </body>
</html>