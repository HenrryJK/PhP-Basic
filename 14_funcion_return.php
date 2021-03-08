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
            function total_pagar ($cantidad) {
              $total = $cantidad * 2.00;
              return $total;
            }
            $cantidad_a_pagar = total_pagar("1000");
           //echo $cantidad_a_pagar;
            function balance_banco ($cantidad_pagar) {
           //  $balance = 600;
             $balance = 6000;
              if($cantidad_pagar > $balance) {
                echo "hubo un error al hacer el pago";
              } else {
                echo "El pago fue exitoso";
              }
              
            }
              balance_banco($cantidad_a_pagar);
              ?>
          </div>
    </div>
  </body>
</html>