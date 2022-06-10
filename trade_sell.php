<?php
include_once("bootstrap.php");
include_once("header.inc.php");
include_once("navbar.inc.php");

?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Epicards | Feed</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/trade_sell.css">
  <link rel="stylesheet" href="css/bottom-navbar/trade_sell_bar.css">
  <link rel="icon" type="image/x-icon" href="/upload/favicon.png">
</head>

<body>
  <a href="search_buy_sell.php">
    <div class="search">
      <input type="text" id="name-input" placeholder="Search for users, cards and shops" name="current-search" class="form_input card_input">
      <button id="search-button" class="search_btn"><img src="assets/search_icon.svg" alt="search button" class="search_btn">
      </button>
    </div>
  </a>
  <div class="trade_sell_container">
  <button class="btn-collection button_sec"><a href="#"><img src="assets/plus_icon.svg" alt="plus icon" class="icon_plus">new post</a></button>
  </div>

</body>

</html>