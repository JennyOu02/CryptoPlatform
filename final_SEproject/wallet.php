<?php
include "buyProcess2.php";
$orders = fetch_orders_by_user($db, "Orders", ["*"], $_SESSION['userName']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>wallet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="wallet.css">
  </head>
  <body>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" >
          
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="success.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="market.html">Market</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="chart.html">Chart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buyCrypto2.php">Buy Crypto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sellCrypto.php">Sell Crypto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    
      <div class="p-4 d-flex flex-column navy-bg-color ">
        <span class="text-uppercase font-10 weight-600 white-color-2">Balance Details</span>
        <span class="font-30 weight-600 white-color mt-4">10,000</span>
        <span class="font-20 weight-300 white-color-2">CREDITS</span>
        <div class="d-flex flex-row justify-content-between mt-4">
            <!--<div class="d-flex flex-column">-->
            <!--    <span class="font-20 weight-600 white-color">$3,742.00</span>-->
            <!--    <span class="font-20 weight-300 white-color-2">Income</span>-->
            <!--</div>-->
            <!--<div class="d-flex flex-column">-->
            <!--    <span class="font-20 weight-600 white-color">$6,987.00</span>-->
            <!--    <span class="font-20 weight-300 white-color-2">Expense</span>-->
            <!--</div>-->
        </div>
        </div>
        <div class="container text-center">
                <div class="row">
                <div class="col">
                    Holding cryptos 
                </div>
    
                </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="d-flex flex-row">
                  <div class="d-flex flex-row justify-content-center align-items-center square   ">
                  
                  </div>
                  <?php foreach($orders as $order): ?>

                  <div class="d-flex flex-column ps-2">
                      <span class="font-18 weight-700 black-color"><?php echo $order['crypto']; ?></span>
                      <!--<span class="font-15 weight-400 black-color">Bitcoin</span>-->
                  </div>
              </div>

              <div class="d-flex flex-column align-items-end">
                  <span class="font-14 weight-700 red-color"><?php echo $order['quantity']; ?></span>
                  <!--<span class="font-10 weight-400 blue-color">-1.7%</span>-->
              </div>
              <?php endforeach; ?>
          <!--    <div class="d-flex flex-column ps-2">-->
          <!--      <span class="font-18 weight-700 black-color">BTE</span>-->
          <!--      <span class="font-15 weight-400 black-color">Bitcoin</span>-->
          <!--  </div>-->
          <!--  <div class="d-flex flex-column align-items-end">-->
          <!--    <span class="font-14 weight-700 red-color">64%</span>-->
          <!--    <span class="font-10 weight-400 blue-color">-1.7%</span>-->
          <!--</div>-->
        
          <!--    <div class="d-flex flex-column ps-2">-->
          <!--      <span class="font-18 weight-700 black-color">BTE</span>-->
          <!--      <span class="font-15 weight-400 black-color">Bitcoin</span>-->
          <!--  </div>-->
          <!--  <div class="d-flex flex-column align-items-end">-->
          <!--    <span class="font-14 weight-700 red-color">64%</span>-->
          <!--    <span class="font-10 weight-400 blue-color">-1.7%</span>-->
          <!--</div>-->
              </div>
              

              
              <div class="col">
              
              </div>
              <div class="col">
                  
              </div>
              </div>
    </body>

</html>