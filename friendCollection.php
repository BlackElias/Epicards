<?php
include_once("bootstrap.php");
try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}
if (isset($_POST["delete"])) {

    $card = new Cards();
    $card->setCard_id($_POST["cards_id"]);
    $card->DeleteCards();
}
$_SESSION["collection"] = $_GET["id"];
$counter = Cards::getFeedCards();

$premium = User::checkPremium();

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
    <title>Epicards | Friends collection</title>
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

        </a>


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

            <div class="card_scroll">
                <?php

                //var_dump(Cards::getFeedCards());
                $i = 0;
                foreach ($feed as $card) : if ($i == 20) {
                        break;
                    } ?>

                    <div class="card_info">
                        <img src="<?php echo htmlspecialchars($card['card_image']) ?>" alt="card image" class="card_img">
                        <p class="card_name"><?php echo htmlspecialchars($card['card_name']) ?></p>
                        <p id="card-price" class="euro">€ <?php echo htmlspecialchars($card['card_price']) ?></p>
                        <form action="" method="post">
                            <input type="hidden" name="cards_id" value="<?php echo htmlspecialchars($card['cards_id']) ?>">

                        </form>
                    </div>
                <?php $i++;
                endforeach;  ?>
            </div>
        </div>
</body>
<script src="src/js/app.js"></script>
<style>

</style>

</html>