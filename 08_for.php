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
                for ($i=0; $i <= 100 ; $i++) { 
                /*  echo $i;
                  echo "<br/>"; */

                  if ($i == 5 ) {
                    echo "Es el numero cinco !!!!!!! <br/>";
                    continue;
                  }
                  echo "El numero empieza en:" . $i  . "<br/>";
                }
              ?>
        
          </div>
    </div>
    
  </body>
</html>