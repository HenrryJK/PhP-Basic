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
                    'pais' => 'Peru'
                 );
                 echo $estudiante['nombre'] . " "  . $estudiante['apellido'] . " es de : " . $estudiante['pais'] ;
            //     echo $estudiante['apellido'];
                echo "<pre>";
                print_r($estudiante);
                echo "</pre>";
              ?>
          </div>
    </div>
    
  </body>
</html>