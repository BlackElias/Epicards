<?php
include_once("bootstrap.php");
include_once("header.inc.php");
include_once("navbar.inc.php");

if(isset($_POST)){
  try{
    $url = "trade.php?".$_SERVER['QUERY_STRING'];
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: $url");
  }
  catch (\Throwable $e) {
    $error = $e->getMessage();
  }
}

?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/newpost.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bottom-navbar/trade_sell_bar.css">

</head>

<body>
  <a href="search_buy_sell.php">
  <div class="search">
      <input type="text" id="name-input" placeholder="Search for other users" name="current-search" class="form_input card_input">
      <button id="search-button" class="search_btn"><img src="assets/search_icon.svg" alt="search button" class="search_btn">
      </button>
    </div>
  </a>
  <div class="post_container">
    <h1>Trade / Sell</h1>
    <h3>Would you like to trade or sell the card</h3>
    <input type="text" id="collection-name" placeholder="Titel van de post" name="collection-name" class="collection-name">
    <button class="btn-sell button_sec" type="submit" name="sell" value="sell"><img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon">Sell</a></button>
    <button class="btn-trade button_sec" type="submit" name="trade" value="trade"><img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon">Trade</a></button>


  </div>

</body>

</html>