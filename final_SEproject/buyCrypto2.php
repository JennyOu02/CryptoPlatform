<?php 
// session_start();
include "buyProcess2.php";

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Buy Crypto</title>
    <!--<script src="classes/order.js"></script>-->
    <!-- <script src="class/orderHandler.js"></script> -->
    <link rel="stylesheet" href="buyCrypto.css">
  </head>

  <body>
  <!-- let user select the items -->
    <form method="POST">
        <h1>Buying Crypto</h1>

        <label>Select a cryptocurrency:</label>
        <select id="crypto" name="crypto">
            <option value="BTCUSD">BTCUSD</option>
            <option value="DOGEUSDT">DOGEUSDT</option>
            <option value="ETHUSD">ETHUSD</option>
            <option value="XRPUSDT14J2023">XRPUSDT14J2023</option>
            <option value="LTCUSDM2023">LTCUSDM2023</option>
            <option value="TRXUSDT14J2023">TRXUSDT14J2023</option>
            <option value="DOTUSDM2023">DOTUSDM2023</option>
            <option value="LINKUSDM2023">LINKUSDM2023</option>
            <option value="EOSUSDT14J2023">EOSUSDT14J2023</option>
        </select>

        <br>

        <label>Enter amount:</label>
        <input type="number" id="amount" name="amount" min="0.01" step="0.01" value="0.01">

        <br>

      <!-- confirm final purchase -->
      <button type="submit" name="confirmBuy" id="confirmBuy">Confirm purchase</button>      
    </form>
    <div class="home"><a href="success.php"><button id="home">Back to Home</button></a></div>
    
  </body>
</html>