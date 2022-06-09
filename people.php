<?php

include_once("bootstrap.php");

try {
    $feed = Collection::getFeedCollectionsUnprivate($_GET["id"]);
    //$allFollowing = Follower::getAllFollowing($_SESSION["userId"]);
    //$allFollowers = Follower::getAllFollowers($_SESSION["userId"]);
    $user = new User();
    $currentUserId = $_GET["id"];
    $currentUser = $user->getUserInfo($currentUserId);



    $currentUser = $user->getUserInfo($currentUserId); //---Updated User Fetch---
} catch (\Throwable $th) {
    $error = $th->getMessage();
}
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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Epicards | <?php echo htmlspecialchars($currentUser["username"]) ?></title>
</head>

<body>
    <div class="top">
        <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"></button>
        <div class="profile-box-info">
            <?php if (!empty($currentUser["picture"])) : ?>
                <img class="profile-picture-big" src="<?php echo $currentUser["picture"] ?>" alt="profile picture">
            <?php endif; ?>

        </div>
        <div class="profile-box-names">
            <h1><?php echo htmlspecialchars($currentUser["username"]) ?></h1>
        </div>
</body>


<main>
    <div class="box-container">
        <div class="profile-box">

        </div>

    </div>
    </div>
    </div>
    <div class="profile-stats-container">
        <div class="box-container-medium ">
            <div class="profile-stats-box">


            </div>
        </div>


</main>
<?php




$i = 0;
foreach ($feed as $collection) : if ($i == 20) {

        break;
    } ?>

    <a class="collection-text" href="friendCollection.php?title=<?php echo $collection["collection_name"] ?>&id=<?php echo $collection["collection_id"] ?>&type=<?php echo $collection["collection_type"] ?>">
        <div class="container">
            <div class="collection-pokemon">
                <div class="collection_card_text">
                    <div class="cards_amount">
                        <p><?php

                            echo Collection::countCards($collection["collection_id"]);
                            ?></p>
                        <p class="">cards</p>
                    </div>

                    <p class="collection_title"> <img src="assets/card_icon.svg" class="card_icon" alt=""><span class="coll_title-text"><?php echo htmlspecialchars($collection['collection_name']) ?></span></p>
                </div>
            </div>
        </div>
    </a>
<?php $i++;
endforeach;  ?>



</body>

</html>