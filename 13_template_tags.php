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
            function the_tittle (){
              echo "El titulo de este blog";
            }    
          function the_date(){
                echo "06 / 03 /21";
          }
          function the_author(){
            echo "Henr Jean Paul";
          }
              ?>
          <div class="entrada">
              <h2> <?php  the_tittle();  ?> </h2>
              <p>Publicado el : <?php  the_date();  ?> </p>
              <p>Escrito por : <?php  the_author();  ?>  </p>
          
          
          </div>
          </div>
    </div>
    
  </body>
</html>