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
         
          array_push($productos , 'Papel Higenico');
          array_push($productos , 'Jabon liquido');

          unset($productos[6]);
         /* echo $productos[2];
          echo "<br/>";
          echo $productos[4];*/
          echo "<pre>";
          print_r($productos);

          echo "</pre>";

              ?>
          </div>
    </div>
    
  </body>
</html>