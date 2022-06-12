<?php
use src\php\classes\Cards\Cards;
use src\php\classes\trade\Trade;
//get id from url 
use src\php\classes\Collection\Collection;
$tradeId = 2;

if(isset($_POST["card_id"])){
    $cardId = $_POST["card_id"];
    Trade::addCardByTradeId($cardId, $tradeId);
}

try {
    $currentUserId = $_SESSION["userId"];
 } catch (\Throwable $th) {
    $error = $th->getMessage();
 }

 $collectionsArray = Collection::getFeedCollections($_SESSION["userId"]);
 
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
    <title>Epicards adding cards</title>
</head>

<div>
    <!--
        Add breadcrumb
     -->
    <a href="">Go back</a>
</div>

<body>
 <?
 foreach($collectionsArray as $collection){
    $cards = Cards::getCardsByCollectionId($collection["collection_id"]);
    foreach($cards as $card){
        ?>

        <div class="card_info" >
            <img  src="<?php echo htmlspecialchars($card['card_image']); ?>" alt="card image" class="card_img">
            <p class="card_name"><?php echo htmlspecialchars($card['card_name']); ?></p>
            <p id="card-price" class="euro">€ <?php echo htmlspecialchars($card['card_price']); ?></p>
            <form action="" method="post">
                <input type="hidden"name="cards_id" value="<?php echo htmlspecialchars($card['cards_id']); ?>">
                <button type="submit" name="card" class="bin_icon">
                    <img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon">
                </button>
            </form>
        </div>
        <?php
    }
 }
 ?>

</body>