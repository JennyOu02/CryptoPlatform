
<!-- if login is successful and accountType is student got to this page -->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <section class="success">
      <h1>You have successfully logged in. Enjoy your trade!</h1>
      <div class="successbtn">
        <button onclick="location.href='market.html'">Crypto Market</button>
        <button onclick="location.href='chart.html'">Crypto chart</button>
        <button onclick="location.href='wallet.php'">Your wallet</button>
        <button onclick="location.href='buyCrypto2.php'">Buy Crypto</button>
        <button onclick="location.href='sellCrypto.php'">Sell Crypto</button>
      </div>
    </section>
    <div class="tradingview-widget-container-top" id="widget1">
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Quotes</span></a> by TradingView</div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
      {
      "symbols"; [
        {
          "description": "",
          "proName": "COINBASE:BTCUSD"
        },
        {
          "description": "",
          "proName": "COINBASE:ETHUSD"
        },
        {
          "description": "",
          "proName": "BINANCE:IOTAUSD"
        }
      ],
      "colorTheme"; "dark",
      "isTransparent"; false,
      "locale"; "en"
    }
      </script>
    </div>
  
  </div>
  <div class="tradingview-widget-container-bottom" id="widget2">
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Ticker Tape</span></a> by TradingView</div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
      {
      "symbols"; [
        {
          "description": "",
          "proName": "COINBASE:BTCUSD"
        },
        {
          "description": "",
          "proName": "COINBASE:ETHUSD"
        },
        {
          "description": "",
          "proName": "BINANCE:IOTAUSD"
        }
      ],
      "colorTheme"; "dark",
      "isTransparent"; false,
      "displayMode"; "adaptive",
      "locale"; "en"
    }
      </script>
      
    </div>
  </div>
  </body>
</html>
