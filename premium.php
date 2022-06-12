<?php
include_once("bootstrap.php");
try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}
if (!empty($_POST)) {
    try {
        $user = new User();
        $user->setPremium($_POST["premium"]);


        $user->updatePremium();


        header("Location: index.php");
    } catch (\Throwable $th) {
        $error = $th->getMessage();
    }
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
    <link rel="stylesheet" href="css/premium.css">
    <title>Epicards | Go Premium</title>
</head>

<body>
    <div class="premium_container">
        <img src="assets/logo.png" alt="logo" class="logo">
        <div class="premium_info">
            <div class="premium_text">
                <h2>Epicards Premium</h2>
                <ul>
                    <li>More than three collections</li>
                    <li>See how much your collection is worth</li>
                    <li>Store more than 1 000 cards</li>
                </ul>
            </div>
        </div>
        <form action="" method="post">
            <input type="hidden" name="premium" value="ja">
            <button type="submit" class="w-100 btn_buy btn-lg submit">Buy</button>
        </form>
    </div>
</body>

</html>