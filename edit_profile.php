<?php
use src\php\classes\User\User;
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
    <link rel="stylesheet" href="css/edit_settings.css">
    <link rel="stylesheet" href="css/bottom-navbar/profile_bar.css">
    <title>Epicards | Profile</title>
</head>

<body>
    <div class="edit-settings_container">
        <div class="top">
            <a href="profile.php"><button><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"></button></a>
            <h1>Edit profile</h1>
        </div>
        <div class="settings_scroll">
            <main>
                <div class="box-container">
                    <div class="box-container edit-container hidden">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-row form-spacing">
                                <div class="mb-3">
                                    <label class="form-label" for="profilePicture"></label>
                                    <div class="profile-box">
                                        <div class="profile-box-info">
                                            <?php if (!empty($currentUser["picture"])) : ?>
                                                <img class="profile-picture" src="<?php echo $currentUser["picture"] ?>" alt="profile picture">
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <input type="file" class="form-border custom-file-input" name="profilePicture" id="profilePicture">
                                            <!-- <small class="form-text text-muted" for="removeProfilePicture">Do you want to remove your current profile picture?</small>
                                            <input type="checkbox" name="removeProfilePicture" id="removeProfilePicture">-->
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="Username">Edit Username</label>
                                    <input type="text" class="form-control form-border" name="username" id="Username" placeholder="Username" value=<?php echo htmlspecialchars($currentUser['username']); ?>>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="Email">Edit Email</label>
                                    <input type="email" class="form-control form-border" name="email" id="Email" placeholder="Email" value=<?php echo htmlspecialchars($currentUser['email']); ?>>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="password">Edit Password</label>
                                    <input type="password" placeholder="Enter new password" class="form-control form-border" name="password" id="password">
                                </div>
                                <small id="passwordHelpBlock" class="form-text text-muted">Please verify by entering your current password</small>
                                <div class="mb-3">
                                    <label class="form-label" for="passwordConfirm">Verify</label>
                                    <input type="password" placeholder="Enter current password" class="form-control form-border" id="passwordConfirm" name="passwordConfirm" required> <br>
                                </div>
                                <div class="btn-center">
                                    <button type="submit" class="w-100 btn btn-lg">Update profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>

</html>