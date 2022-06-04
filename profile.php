<?php

include_once("bootstrap.php");
include_once("header.inc.php");
include_once("navbar.inc.php");
include_once("bootstrap.php");

try {
   // $feed = Post::getUserPosts($_SESSION["userId"]);
    //$allFollowing = Follower::getAllFollowing($_SESSION["userId"]);
    //$allFollowers = Follower::getAllFollowers($_SESSION["userId"]);
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);

  

        $currentUser = $user->getUserInfo($currentUserId); //---Updated User Fetch---
    }
 catch (\Throwable $th) {
    $error = $th->getMessage();
}

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
    <title>Profile</title>
</head>

<body>
    <div class="top">
        <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"></button>
        <h1>My profile</h1>
    </div>
</body>


    <main>
        <div class="box-container">
            <div class="profile-box">
                <div class="profile-box-info">
                    <?php if (!empty($currentUser["picture"])) : ?>
                        <img class="profile-picture-big" src="<?php echo $currentUser["picture"] ?>" alt="profile picture">
                    <?php endif; ?>
                    <div class="profile-box-names">
                        <h1><?php echo htmlspecialchars($currentUser["username"]) ?></h1>
                        
                    </div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="profile-stats-container">
            <div class="box-container-medium ">
                <div class="profile-stats-box">
                    <h4><span><?php echo count($feed) ?></span> Posts</h4>
                   
                </div>
            </div>
          
       
    </main>
    <div class="post box-container">
        <div class="new_post-box">
            <?php if (!empty($currentUser["picture"])) : ?>
                <img class="profile-picture" src="<?php echo $currentUser["picture"] ?>" alt="profile picture">
            <?php endif; ?>
            <h2 class="new_post-box-title">Posts</h2>
            <a href="new_post.php" class="btn nav-btn">New post</a>
        </div>
    </div>
    

    <?php

    foreach ($feed as $post) :  ?>
        <?php include("post.inc.php") ?>
    <?php endforeach; ?>
</body>

</html>