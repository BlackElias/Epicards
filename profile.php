<?php
use src\php\classes\User\User;
use src\php\classes\Collection\Collection;
include_once("bootstrap.php");

try {
    $feed = Collection::getFeedCollections($_SESSION["userId"]);
    //$allFollowing = Follower::getAllFollowing($_SESSION["userId"]);
    //$allFollowers = Follower::getAllFollowers($_SESSION["userId"]);
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);



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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/bottom-navbar/profile_bar.css">
    <title>Epicards | Profile</title>
</head>

<body>
    <div class="top_background">
        <div class="top">
            <div class="profile-box-info">
                <?php if (!empty($currentUser["picture"])) : ?>
                    <img class="profile-picture-big" src="<?php echo $currentUser["picture"] ?>" alt="profile picture">
                <?php endif; ?>
            </div>
            <div class="profile-box-names">
                <span class="username_title"><?php echo htmlspecialchars($currentUser["username"]) ?></span>
            </div>
        </div>
        <div class="flex_top-btns">
            <a href="friendlist.php" class="friendlist_btn"><img src="assets/friendlist_icon.svg" alt="friendlist icon" class="edit_icon">friendlist</a>
            <a class="edit-profile_btn" href="edit_profile.php"><img src="assets/edit_icon_small.svg" alt="edit icon" class="edit_icon">edit profile</a>
        </div>
    </div>
    <main>

        <div class="box-container">
            <div class="profile-box">
            </div>
        </div>

        <div class="profile-stats-container">
            <div class="box-container-medium ">
                <div class="profile-stats-box">
                </div>
            </div>
        </div>

    </main>
    <div class="posts_scroll">
       
        <button class="btn-collection button_sec"><a href="newpost.php"><img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon">new post</a></button>

    </div>
    <div class="hidden_block">hidden</div>
</body>

</html>