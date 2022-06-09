<?php
include_once("bootstrap.php");
try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}
if (isset($_GET['id'])) {
    $_SESSION["CollectionId"] = $_GET['id'];
}
if (isset($_GET['type'])) {
    $_SESSION["collectionType"] = $_GET['type'];
}
if (isset($_GET['title'])) {
    $_SESSION["collectionName"] = $_GET['title'];
}


if (isset($_POST["delete"])) {

    $card = new Cards();
    $card->setCard_id($_POST["cards_id"]);
    $card->DeleteCards();
}
if (!empty($_GET['query'])) {
    try {
        $card = new Cards;

        $searchresult = $_GET['query'];


        $card = $card->searchCards($searchresult);
    } catch (\Throwable $th) {
        $error = $th->getMessage();
    }
}
if (isset($_GET["id"])) {
    $_SESSION["collection"] = $_GET["id"];
}

$counter = Cards::getFeedCards();

$premium = User::checkPremium();
$private = Collection::getFeedCollectionsPrivate();
$feed = Cards::getFeedCards();

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
    <title>Epicards Collection</title>
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
           <a href="index.php"><button><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"> </button></a>
            <h1 class="collection-name"><?php echo htmlspecialchars($_SESSION["collectionName"]) ?></h1>
            <a href="editCollection.php"><img src="assets/edit_icon.svg" alt="edit icon" class="edit_icon"></a>
        </div>
        <!-- if change text  -->
        <?php
        $p = array_column($private, 'collection_private');

        if ($p[0] == "private") {
            echo '<p class="visibility">Visible to you only</p>';
        } else {
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
            <?php
            // var_dump(array_values($check) );

            if (count($counter) >= 1000) {

                $check = array_column($premium, 'premium');

                if ($check[0]  == 'ja') {
                    echo ' <form action="scan.php" method="POST">
                                     <button type="submit" href="addCard.php" class="button_sec btn-add_card "><img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon">new card</button>
                            </form>';
                }
                if ($check[0]  == 'nee') {
                    echo  '<button href="premium.php" class="button_sec btn-add_card "><a href="premium.php" style="color: black;">Buy premium for more cards</a></button>';
                }
            } else {
                echo ' <form action="scan.php" method="POST">
                                     <button type="submit" href="addCard.php" class="button_sec btn-add_card "><img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon">new card</button>
                            </form>';
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
        <input type="hidden"name="cards_id" value="<?php echo htmlspecialchars($searchresult['cards_id']) ?>">
    <button type="submit" name="delete" class="bin_icon" value="delete">&#x2715</button>
    </form>
</div>

    <?php endforeach;
} else{
                //var_dump(Cards::getFeedCards());
                $i = 0;
                foreach ($feed as $card) : if ($i == 1000) {
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

<style>

</style>

</html>