<?php
use src\php\classes\Trade\Trade;
use src\php\classes\Cards\Cards;

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
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bottom-navbar/trade_sell_bar.css">
  <link rel="icon" type="image/x-icon" href="/upload/favicon.png">
</head>

<body>
  <a href="search_buy_sell.php?query=">
    <div class="search">
      <input type="text" id="name-input" placeholder="Search for users, cards and shops" name="current-search" class="form_input card_input">
      <button id="search-button" class="search_btn"><img src="assets/search_icon.svg" alt="search button" class="search_btn">
      </button>
    </div>
  </a>
  <div class="trade_sell_container">

    <div class="top_links">
      <a href="trade_sell.php" class="friends_link">Feed</a>
      <span class="vl_line"></span>
      <a href="trade_sell-shops.php" class="shops_link">Shops</a>
    </div>

    <?php
    $trade = Trade::getTradeByUserId($_SESSION["userId"]);
            if (sizeof($trade) <= "0") {

                echo '  
                <div class="empty_state">
                <img src="assets/emptystate_no-friends.svg" alt="empty state illustration" class="empty_state_img">
                <p class="empty_state_text">You do not have friends added yet. <br> Search for friends in the search bar above!</p>
                </div>
        ';
            } ?>
      
      <div class="collections_scroll">
      <?php

         
         //var_dump($currentUserId);

         $i = 0;
         foreach ($trade as $post) : if ($i == 20) {

               break;
            } ?>

            <a class="post-text" href="trade.php?id=<?php echo $post["id"] ?>">
               <div class="container">
                  <div class="collection-pokemon">
                     <div class="collection_card_text">
                        <div class="cards_amount">
                           <p><?php

                              echo Trade::count($trade["id"]);
                              ?></p>
                           <p class="">cards</p>
                        </div>

                        <p class="collection_title"> <img src="assets/card_icon.svg" class="card_icon" alt=""><span class="coll_title-text"><?php echo htmlspecialchars($post['name']) ?></span></p>
                     </div>
                  </div>
               </div>
            </a>
         <?php $i++;
         
         endforeach;  ?>
         <div class="hidden_block"></div>
         <button class="btn-collection button_sec"><a href="newpost.php"><img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon" style="width: 20px;">new post</a></button>
      </div>
  </div>

</body>

</html>