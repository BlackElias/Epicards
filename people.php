<?php
use src\php\classes\User\User;
use src\php\classes\Follower\Follower;
use src\php\classes\Collection\Collection;
include_once("bootstrap.php");

try {
    $feed = Collection::getFeedCollectionsUnprivate($_GET["id"]);
    
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);

    $otherUserid = $_GET["id"];
    $otherUser = $user->getUserInfo($otherUserid);
    $allFollowing = Follower::getAllFollowing($_SESSION["userId"]);
    $allFollowers = Follower::getAllFollowers($_SESSION["userId"]);

    $follower = new Follower();
    $follower->setUser_id($currentUserId);
    $follower->setFollower_id($otherUserid);
    $check = $follower->checkFollowed();
    if (!empty($check)) {
        $followedId = $check[0]["id"];
    } else {
        $followedId = " ";
    }

    $currentUser = $user->getUserInfo($currentUserId); //---Updated User Fetch---
} catch (\Throwable $th) {
    $error = $th->getMessage();
}

include_once("header2.inc.php");
include_once("navbar.inc.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/people.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Epicards | <?php echo htmlspecialchars($otherUser["username"]) ?></title>
</head>

<body>
    <div class="background_top">
        <div class="top">
            <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"></button>
            <div class="profile-box-info">
                <?php if (!empty($otherUser["picture"])) : ?>
                    <img class="profile-picture-big" src="<?php echo $otherUser["picture"] ?>" alt="profile picture">
                <?php endif; ?>
                <div class="profile-box-names">
                    <span class="username"><?php echo htmlspecialchars($otherUser["username"]) ?></span>
                </div>
            </div>
        </div>
        <div class="top_btns">

        <div class="button_sec btn-profile-follow" data-datapicture="<?php echo $otherUser['picture'] ?>" data-followid="<?php echo $followedId ?>" data-dataname="<?php echo $otherUser['username'] ?>" data-followedUser="<?php echo $otherUser['id'] ?>"><?php echo $followedId !== " "  ? '<img src="assets/x_icon.svg" alt="plus icon" class="plus_icon">unfriend' : '<img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon">add friend' ?></div>

            <a href="#" class="chat_btn"><img src="assets/chat_icon.svg" alt="chat icon" class="chat_icon_small">chat</a>
        </div>
        <div class="lower_btns">
            <a href="#" class="activity_btn">activity</a>
            <span class="vl_line"></span>
            <a href="people.php" class="collection_btn">collections</a>
        </div>
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
<script src="src/js/other_user.js"></script>
</html>