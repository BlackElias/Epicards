<?php
include_once("bootstrap.php");
include_once("header.inc.php");
include_once("navbar.inc.php");
try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}


$_SESSION["collection"] = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/collection.css">
    <title>Document</title>
</head>

<body>
    <input type="text" class="form_input card_input" id="card" name="card" placeholder="search card"></input>
    <?php //echo htmlspecialchars($_GET['id']); 
    ?>
    <div class="collection_container">
        <div class="top">
            <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"> </button>
            <h1 class="collection-name"><?php echo htmlspecialchars($_GET["title"]) ?></h1>
        </div>
        <!-- if change text and icon -->
        <a href="">
            <p class="visibility">Visible to friends only</p>
        </a>
        <img src="" alt="">

        <div class="collection-flex">
            <div class="collection_column">
                <p>Collection price:</p>
                <div class="price_inline">
                    <span>0</span>&nbsp;
                    <p>euro</p>
                </div>

            </div>
            <div class="collection_column">
                <p>Card amount:</p>
                <span>0</span>
            </div>
        </div>
        <!-- if image -->
        <img src="" alt="">
        <p class="empty_state">There are no cards in this collection</p>
        <form action="addCard.php" method="POST">
            <input type="hidden" name="id" value="<?php echo  $_GET['id'] ?>"></input>
            <button type="submit" href="addCard.php" class="button_sec btn-add_card "><img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon">new card</button>
        </form>
        <?php

        $feed = Cards::getFeedCards();
        // var_dump(Cards::getFeedCards());

        $i = 0;
        foreach ($feed as $card) : if ($i == 20) {
                break;
            } ?>

            <?php include("card.inc.php"); ?>
        <?php $i++;
        endforeach;  ?>
    </div>
</body>

</html>