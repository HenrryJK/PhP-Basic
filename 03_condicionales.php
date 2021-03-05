<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
          <h1>Aprendiendo PHP Basic</h1>
          
          <div class="codigo">
              <?php
               //   $number1 = 10;
                 // $number2 = 9;

                //  $number1 = 8;
               //   $number2 = 9;

               $number1 = 10;
               $number2 = 10;
                  if ($number1 > $number2) {
                    echo "el numero 1 es mayor";
                  }elseif ($number1 == $number2) {
                    echo "son iguales!!!..";
                  } else{
                    echo "el numero 2 es mayor";
                  }
                echo "<hr>" ;
                if ($number1 != 10 ) {
                  print "No, no son iguales";
                }else {
                  print "Si , si son iguales..";
                }
                echo "<hr>";
               // $usuariologueado = true;
               $usuariologueado = false;
                if ($usuariologueado) {
                  echo "Mostrando contenido";
                }else {
                  echo "Debe iniciar sesion por favor";
                }
                
              ?>
              
          </div>
    </div>
    
  </body>
</html>