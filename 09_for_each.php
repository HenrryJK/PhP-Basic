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
              $productos = array('Jabon' , 'Cepillo' , 'Pasta Dental' , 'Toalla' , 'Hilo Dental');

              foreach ($productos as $producto) {
                echo "Uno de mis productos de aseo personal que suelo comprar es: ";
                echo $producto . "<br/>";
                echo "<hr>";
              }
              ?>
        
          </div>
    </div>
    
  </body>
</html>