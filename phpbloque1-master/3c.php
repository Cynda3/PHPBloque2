<!DOCTYPE html>
    <head>
        <title>Bloque1 PHP/3. Rango de edad</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>3. Dada una edad muestra el rango de valores en decenas entre las que se encuentra de 0 a 100.</p>

        <?php
            $edad = rand(1,100);

            echo "Age: $edad <br><br>";

            switch ($edad) {
                case ($edad<=10):
                    echo("Your age is between 0 and 10");
                    break;
                case ($edad<=20):
                    echo("Your age is between 11 and 20");
                    break;
                case ($edad<=30):
                    echo("Your age is between 21 and 30");
                    break;
                case ($edad<=40):
                    echo("Your age is between 31 and 40");
                    break;
                case ($edad<=50):
                    echo("Your age is between 41 and 50");
                    break;
                case ($edad<=60):
                    echo("Your age is between 51 and 60");
                    break;
                case ($edad<=70):
                    echo("Your age is between 61 and 70");
                    break;
                case ($edad<=80):
                    echo("Your age is between 71 and 80");
                    break;
                case ($edad<=90):
                    echo("Your age is between 81 and 90");
                    break;
                case ($edad<=100):
                    echo("Your age is between 91 and 100");
                    break;
                default:
                    break;
            }

        ?>
    </body>
</html>