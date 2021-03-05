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
              $Mensage = "Hello world!!! Everyone. I just celebraty  ";
              $numero = 12;
              $years = 'Years aniversary';
           //   $tired = true;
              $number1 = 10;
              $number2= 5;
              echo $Mensage ;
              echo  $numero ;
               echo $years  ;
           //   echo $tired;
              echo "<br>";
              echo $number1 - $number2;
              echo "<br>";
              echo $number1 + $number2;
              echo "<br>";
              echo $number1 * $number2;
              echo "<br>";
              echo $number1 / $number2;
              ?>
          </div>
    </div>
    
  </body>
</html>