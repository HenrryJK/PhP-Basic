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
              function saludos(){
                echo "Bienvenido de nuevo <br/>";
              }

              saludos();

              function suma() {
                echo 2 + 2 . "<br/>";
              }
              suma();



              ?>
        
          </div>
    </div>
    
  </body>
</html>