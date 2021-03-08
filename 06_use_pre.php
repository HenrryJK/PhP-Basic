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
                 $estudiante = array (
                    'nombre' => 'Henrry',
                    'apellido' => 'Orbezo Perkga',
                    'pais' => 'Peru',
                    'edad' => 18,
                    'user_login' => true
                 );
              
                echo "<pre>";
                print_r($estudiante);
                echo "</pre>";
                  echo "<br>";
                echo "<pre>";
                var_dump($estudiante);
                echo "</pre>";

                echo "<br>";

                $productos = array('Jabon' , 'Cepillo' , 'Pasta Dental' , 'Toalla' , 'Hilo Dental');
                echo "<pre>";
                var_dump($productos);
                echo "</pre>";
                 
                echo $productos[2];
                echo "<br>";
                echo $estudiante['apellido'];
              ?>
          </div>
    </div>
    
  </body>
</html>