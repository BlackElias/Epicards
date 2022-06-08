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
  $_SESSION["CollectionId"]=$_GET['id'];
 $_SESSION["collectionType"]=$_GET['type'];
  $_SESSION["collectionName"]=$_GET['title'];
if (isset($_POST["delete"])) {

    $card = new Cards();
    $card->setCard_id($_POST["cards_id"]);
    $card->DeleteCards();
}
$_SESSION["collection"] = $_GET["id"];
$counter = Cards::getFeedCards();

$premium = User::checkPremium();
$private = Collection::getFeedCollectionsPrivate();
$feed = Cards::getFeedCards();

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
    <title>Epicards Collection</title>
</head>

<body>
    <input type="text" class="form_input card_input" id="card" name="card" placeholder="search card"></input>
    <?php //echo htmlspecialchars($_GET['id']); 
    ?>
    <div class="collection_container">
        <div class="top">
            <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"> </button>
            <h1 class="collection-name"><?php echo htmlspecialchars($_GET["title"]) ?></h1>
            <a href="editCollection.php"><img src="assets/edit_icon.svg" alt="edit icon" class="edit_icon"></a>
        </div>
        <!-- if change text  -->
        <?php 
        $p = array_column($private, 'collection_private');
        
        if($p[0] == "private"){
            echo '<p class="visibility">Visible to you only</p>';
        }else{
            echo '<p class="visibility">Visible to friends only</p>';
        } ?>
        


        <div class="collection-flex" id="collection">
            <div class="collection_column">
                <p>Collection price:</p>
                <div class="price_inline">
                    <span>
                        <?php
                        $check = array_column($premium, 'premium');
                        // var_dump(array_values($check) );
                        if ($check[0]  == 'ja') {
                            $price = array_column($counter, 'card_price');
                            echo    '<p>€</p>';
                            echo '</span>&nbsp;';
                            echo  array_sum($price);
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
                        echo  count($counter);
                        ?>
                    </span>
                </div>
            </div>
            <!-- if image -->
            <?php
            if (sizeof($counter) <= "0") {

                echo '  
        <div class="empty_state">
            <img src="assets/empty_state_img.svg" alt="empty state illustration" class="empty_state_img"> 
            <p class="empty_state_text">There are no cards in this collection</p>
        </div>
        ';
            } ?>
            <form action="scan.php" method="POST">
            <input type="hidden" value="<?php echo htmlspecialchars($_GET['title']) ?>" name="collection_name"></input>

                <input type="hidden" name="id" value="<?php echo  htmlspecialchars($_GET['id']) ?>"></input>
                <input type="hidden" name="type" value="<?php echo  htmlspecialchars($_GET['type']) ?>"></input>
                <button type="submit" href="addCard.php" class="button_sec btn-add_card "><img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon">new card</button>
            </form>
            <div class="card_scroll">
                <?php

                //var_dump(Cards::getFeedCards());
                $i = 0;
                foreach ($feed as $card) : if ($i == 20) {
                        break;
                    } ?>

                    <?php include("card.inc.php"); ?>
                <?php $i++;
                endforeach;  ?>
            </div>
        </div>
</body>
<script src="src/js/app.js"></script>
<style>

</style>

</html>