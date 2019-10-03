<html>
    <head>
        <title>Mayor</title>

    </head>
    <body>
        <?php
             $a = rand (1,20);
             $b = rand (1,20);
             $c = rand (1,20);
            echo "a: $a b: $b c: $c<br>";
             if($a>$b){
                if($a>$c){
                    echo $a.' es el mayor.';
                }
                else
                    echo $c.' es el mayor.';
             }
             elseif($b>$c){
                 echo $b.' es el mayor.';
             }
             else
                echo $c.' es el mayor.';


        ?>
    </body>
</html>