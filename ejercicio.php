<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //iteracion 
    echo '<h3>'; //imprimir etiqueta de encabezado

      // condicionales
    for($n = 0; $n < 99; $n++){
    
        if ($n <= 9 ){  //condicional para anteponer 0, entre los numeros 0 y 9

        echo '0'.$n.", " ; //imprimir 0 espacio y coma
    } else{           

        echo $n.", " ;  //imprimir  espacio y coma
    }
     }
     echo $n;      //imprimir el ultimo numero sin coma ni espacio

    echo'</h3>' ;  // imprimir etiqueta de cierre 
    ?>
</body>
</html>


