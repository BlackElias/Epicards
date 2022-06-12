<?php

use GPBMetadata\Google\Monitoring\V3\Alert;
use src\php\classes\Cards\Cards;
use src\php\classes\Trade\Trade;
use src\php\classes\User\User;
use src\php\classes\Collection\Collection;
error_reporting(E_ALL);
ini_set("display_errors","On");
include_once("bootstrap.php");
$trade;
$cards;
if(isset($_GET['id'])){
    //regex against cross side scripting (XSS)
    $clean = preg_replace("/[^a-zA-Z0-9 ]/","",$_GET['id']);
    $trade = Trade::getTradeById($clean);
    $cards = Cards::getCardsByTradeId($clean);
    //var_dump($cards);
}else{

}

try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}

if (isset($_POST["delete"])) {
    $trade = Trade::getTradeById($trade["id"]);
    $test = $_POST["cards_id"];
    Trade::removeCard($test);
    $location = "Location: ". "trade.php?id=". $trade["id"];
    header($location);
}


$premium = User::checkPremium();
$private = Collection::getFeedCollectionsPrivate();

include_once("header.inc.php");
include_once("navbar.inc.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/collection.css">
    <link rel="stylesheet" href="css/bottom-navbar/collection_bar.css">
    <title>Epicards Trade</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" id="name-input" placeholder="Search cards" name="query" name="current-search" class="form_input card_input">
        <button id="search-button" class="search_btn"><img src="assets/search_icon.svg" alt="search button" class="search_btn"></button>
    </form>
    <?php //echo htmlspecialchars($_GET['id']); 
    ?>
    <div class="collection_container">
        <div class="top">
           <a href="trade_sell.php"><button><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"> </button></a>
            <h1 class="collection-name"><?php echo htmlspecialchars($trade["name"]) ?></h1>
            <form action="" method="post">
            <button type="submit" name="remove" class="bin_icon" value="delete" onclick="myFunction()">delete post</button>
            </form>
        </div>

        <div class="collection-flex" id="collection">
            <div class="collection_column">
                <p><?php echo $trade["type"] ?> price</p>
                <div class="price_inline">
                    <span>
                        <?php
                        $check = array_column($premium, 'premium');
                        // var_dump(array_values($check) );
                        if ($check[0]  == 'ja') {
                            echo    '<p>€</p>';
                            echo '</span>&nbsp;';
                            echo  array_sum(array_column($cards, 'card_price'));
                            echo   ' </div>';
                        } else {
                            echo    '<a href="premium.php" class="premium-only_text">Only for premium users</a>';
                            echo   ' </div>';
                        }
                        ?>
                    </span>
                </div>
                <div class="collection_column">
                    <p>Card amount:</p>
                    <span>
                        <?php
                        echo  count($cards);
                        ?>
                    </span>
                </div>
            </div>
            <!-- if image -->
            <?php
            if (count($cards) <= "0") {

                echo '  
        <div class="empty_state">
            <img src="assets/empty_state_img.svg" alt="empty state illustration" class="empty_state_img"> 
            <p class="empty_state_text">There are no cards in this collection</p>
        </div>
        ';
            } ?>
            <?php
            // var_dump(array_values($check) );

            if (count($cards) >= 1000) {

                $check = array_column($premium, 'premium');

                if ($check[0]  == 'ja') {
                    //add knop redirect kaarten toevoegen
                }
                if ($check[0]  == 'nee') {
                    echo  '<button href="premium.php" class="button_sec btn-add_card "><a href="premium.php" style="color: black;">Buy premium for more cards</a></button>';
                }
            } else {
               //add knop redirect kaarten toevoegen
               $url;
               ?>


               <?php
            } ?>

            <div class="card_scroll">
                <?php

if (isset($_GET["query"])) {
    foreach ($card as $searchresult) :  ?>

<div class="card_info" >
    <img  src="<?php echo htmlspecialchars($searchresult['card_image']) ?>" alt="card image" class="card_img">
    <p class="card_name"><?php echo htmlspecialchars($searchresult['card_name']) ?></p>
    <p id="card-price" class="euro">€ <?php echo htmlspecialchars($searchresult['card_price']) ?></p>
    <form action="" method="post">
        <input type="hidden"name="cards_id" value="<?php echo htmlspecialchars($trade['cards_id']) ?>">
    <button type="submit" name="delete" class="bin_icon" value="delete">&#x2715</button>
    </form>
</div>

    <?php endforeach;
} else{
                //var_dump(Cards::getFeedCards());
                $i = 0;
                foreach ($cards as $card) : if ($i == 1000) {
                        break;
                    } ?>

                <?php include("card.inc.php"); ?>

                <?php $i++;
                    endforeach;
                } ?>
            </div>
        </div>
</body>
<script src="src/js/app.js"></script>

<script>
    function myFunction() {
        var x;
        var r = confirm("Are you sure you want to delete this post?");
        if (r == "true") {
            <?php
            if (isset($_POST["remove"])) {
            Trade::deleteTrade($trade["id"]);
            header("Location: trade_sell.php");
            }
            ?>
        }
        else {
            x = "You deleted it anyway!";
            alert(x);
        }
    }
</script>
<style>

</style>

</html> 