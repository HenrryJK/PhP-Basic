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
              function saludos($nombre){
                echo "Bienvenido de nuevo {$nombre} !!! <br/>";
              }

              saludos("Henrry");

              function suma($num1 , $num2) {
                echo $num1 + $num2 . "<br/>";
              }
              suma(10 , 30);


              ?>
        
          </div>
    </div>
    
  </body>
</html>