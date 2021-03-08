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
              echo count($productos);
              echo "<br/>";

              $minombre1 = "Henrry Orbezo Perkga";
              $minombre2 = str_replace(' ' , '' , $minombre1);

              echo strlen ($minombre2);
              echo $minombre2;
              echo "<br/>";
              echo strtoupper($minombre1);
              echo "<br/>";
              echo strtolower($minombre1);
              echo "<br/>";
              $password = "abc";
              $password2 = "henrry2235progra1255";


              if (strlen($password2) < 10) {
                echo "EL password es muy debil";
              } else {
                echo "EL password es seguro";
              }
              
              ?>
        
          </div>
    </div>
    
  </body>
</html>