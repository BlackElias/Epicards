<?php
ob_start();

use src\php\classes\User\User;
use src\php\classes\Sell\Sell;

include_once("bootstrap.php");
try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}


if (isset($_POST["delete"])) {

    $sell = new Sell();
    $sell->setId($_POST["id"]);
    $sell->Delete();
    header("Location: index.php");
}
$feed = Sell::getFeedSell();
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
    <link rel="stylesheet" href="css/buy.css">
    <link rel="stylesheet" href="css/bottom-navbar/trade_sell_bar.css">
    <title>Epicards | Buy cards</title>
</head>

<body>

    <?php //echo htmlspecialchars($_GET['id']); 
    ?>
    <div class="collection_container">
        <div class="buy_top">
            <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"> </button>
            <h1 class="collection-name">Buy <?php echo htmlspecialchars($_SESSION["cardName"]) ?></h1>

        </div>
        <?php

        $i = 0;
        foreach ($feed as $row) : if ($i == 20) {
                break;
            } ?>
            <a href="#popup1" class="delete_btn">
                <div class=""></div>
                <div class="buy_card-background">
                    <div class="buy_info">
                        <p class="user_info"><?php echo htmlspecialchars($row['username']) ?></p>
                        <p class="price_info">Asking pice: € <?php echo htmlspecialchars($row['price'])  ?></p>
                    </div>
                </div>
            </a>
            <div>
                <div id="popup1" class="overlay">
                    <div class="popup">
                        <a class="close" href="#" class="button_sec">&times;</a>
                        <h2 class="collection-name"><?php echo htmlspecialchars($_SESSION["cardName"]) ?></h2>
                        <form action="" method="post" class="content">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id'])  ?>">
                            <button type="submit" href="" class="button_sec" name="delete">buy card</button>
                            <a href="#" class="chat_btn">Chat with buyer</a>
                        </form>
                    </div>
                </div>
            </div>

        <?php $i++;
        endforeach;  ?>


</body>
<script src="src/js/app.js"></script>
<style>

</style>

</html>