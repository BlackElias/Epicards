<?php

include_once("bootstrap.php");
include_once("header.inc.php");
include_once("navbar.inc.php");
include_once("bootstrap.php");

try {

    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);

    // Update User INFO

    if (!empty($_POST)) {
        $user->setUsername($_POST['username']);
        if ($_POST['username'] !== $currentUser["username"]) {
            $user->checkUsername();
        }

        $user->setEmail($_POST['email']);
        if ($_POST['email'] !== $currentUser["email"]) {
            $user->checkEmail();
        }
    }

    // picture upload
    if (!empty($_FILES["profilePicture"]["name"])) {
        $profilePicture = $user->uploadProfilePicture($_FILES["profilePicture"]["name"]);
        $user->setPicture($profilePicture);
    } else {
        $user->setPicture($currentUser["picture"]);
    }

    // Password Verification  --HIER NIKS ONDER ZETTE!
    $user->setPassword($_POST["passwordConfirm"]);
    $user->verifyPassword($currentUser['id']);

    if (!empty($_POST["password"])) {
        $user->setPassword($_POST["password"]);
        $newPassword = $user->hashPassword();
        $user->updatePassword($currentUser['id']);
    }
    // User updates
    $user->updateInfo($currentUser['id']);

    $currentUser = $user->getUserInfo($currentUserId); //---Updated User Fetch---
} catch (\Throwable $th) {
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
    <link rel="stylesheet" href="css/appsettings.css">

    <title>Profile</title>
</head>

<body>
    <div class="appsettings_container">

        <div class="top">
            <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"></button>
            <h1>Settings</h1>
        </div>

        <div class="profile-box">
            <div class="profile-box-info">
                <?php if (!empty($currentUser["picture"])) : ?>
                    <img class="profile-picture-big" src="<?php echo $currentUser["picture"] ?>" alt="profile picture">
                <?php endif; ?>
            </div>
        </div>
        <p><?php echo htmlspecialchars($currentUser['username']); ?></p>
        <p><?php echo htmlspecialchars($currentUser['email']); ?></p>
        <a href="edit_settings.php">Edit profile</a>
    </div>
    <div class="container">
        <a href="logout.php" class="logout-btn">logout</a>
    </div>
</body>

</html>