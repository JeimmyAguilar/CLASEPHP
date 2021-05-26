 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>php</title>
 </head>
 <body>
     <?php
     //impresiones de texto 
     echo "<h1> Hola mundo!</h1>";

     //variables
      $nombre = "Jeimmy Aguilar";
      $edad = 16;
     //<h3>minombre edad: 16 años</h3>
      echo '<h3>' .$nombre. ' edad: '.$edad.' años </h3>';

      //edad += 10
      //$edad +=10;
      //Ejemplo de como sumar o acumular  $edad += 10;
      $edad .= $nombre;
      echo '<h3>' .$edad. '</h3>';

      //conditionals
       
      if ($edad > 17 ){
        echo '<h3>Es mayor de edad</h3>';
      } else{
        echo '<h3>Es menor de edad</h3>';
      }
      //iteraciones PHP
      for($i = 1;  $i <=5; $i++){
          echo '<h5>iteracion No' .$i. '</h5>';
      }
 
      //funciones 
      function sayHi(){
        echo '<h2>Holis</h2>';
      }

      function suma(){
        $num1= 5;
        $num2= 10;

        return $num1 + $num2;
    }
        sayHi();

        echo suma () ."\n";

        $array = array(
        0 => "Jeimmy" ."\n",
        1 => "Kimberly" ."\n",
        2 => "Kenny " ."\n"
        );

        echo $array [2];

        for($j = 0; $j < 3;  $j++){
          echo $array[$j]."\n";
        }
     ?>
     
 </body>
 </html>
