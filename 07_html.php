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
              ?>
                <!-- HTML EN PHP  -->
              <h1> Hola bienvenido .. <?php  echo $estudiante['nombre'] . " " . $estudiante["apellido"]   ?></h1>
                <!--PHP EN HTML  -->
               <?php  echo "<h1> Hola bienvenido...."  .  $estudiante['nombre'] . " " . $estudiante['apellido']  .  "<h1>"; ?>
          </div>
    </div>
    
  </body>
</html>