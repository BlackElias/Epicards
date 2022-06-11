<?php
include_once("bootstrap.php");
$conn = Db::getConnection();
try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);

    $allFollowers = Follower::getAllFollowing($_SESSION["userId"]);
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
    <link rel="stylesheet" href="https://use.typekit.net/zbb0stp.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bottom-navbar/profile_bar.css">
    <link rel="stylesheet" href="css/friendlist.css">
    <title>Profile</title>
</head>

<body>
    <?php if (isset($error)) : ?>
        <div class="user-messages-area">
            <div class="alert alert-danger">
                <ul>
                    <li><?php echo $error ?></li>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <main>
    <div class="box-container">
            <div class="top">
                <div class="title_backbtn">
                    <a href="profile.php"><button><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"></button></a>
                    <h1>Friendlist</h1>
                </div>
                <div class="search">
                    <input type="text" id="name-input" placeholder="Search for users, cards and shops" name="current-search" class="form_input card_input">
                    <button id="search-button" class="search_btn"><img src="assets/search_icon.svg" alt="search button" class="search_btn">
                    </button>
                </div>
            </div>
            <div class="container_scroll">
                <?php foreach ($allFollowers as $follower) : ?>
                    <div class="profile-box">
                        <a href="people.php?id=<?php echo $follower["id"] ?>">
                            <div class="profile-box-info">
                                <img class="profile-picture-big" src="<?php echo $follower["picture"] ?>" alt="profile picture">
                                <div class="profile-box-names">

                                    <?php echo htmlspecialchars($follower["username"]) ?>

                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                <div class="hidden_block">hidden</div>
            </div>
        </div>
    </main>
</body>

</html>