<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <form name="formulario" method="post" action="ejerciciocinco.php">
<p>escriba la altura: <input type="number" name="altura" value="en numeros"></p>
<p>escriba la edad: <input type="number" name="edad" value="en numeros"></p>
<p>modo: <input type="number" name="modo" value="1 acompañado o 0 solo"></p>
<p><input type="submit" /></p>
</form>

 <?php 
        $edad=$_POST['edad'];
        $altura=$_POST['altura'];
        $acompañado=$_POST['modo'];
        $resultado;

        function fun($edad,$altura,$acompañado){
            if($altura>120){
                $resultado='puede subir';
                return $resultado;
            }
            else if($edad>6 && $acompañado==1){
                $resultado='puede subir';
                return $resultado;
            }else if($edad==6 && $acompañado==0){
                $resultado='no puede subir';
                return $resultado;
            }else if($edad>=10){
                $resultado='puede subir'
                return $resultado;
            }
            else if($edad<10 && $acompañado==0){
                $resultado='no puede subir';
                return $resultado;
            }else if($edad<10 $$ $acompañado==1){
                $resultado='puede subir';
                return $resultado;
            }
        }





        //aqui se llama a una de las dos funciones 
        fun($edad,$altura,$acompañado);
        
 ?>
 </body>
</html>
