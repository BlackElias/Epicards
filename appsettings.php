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
       
               
            </div>
        </div>
        </div>
        <div class="box-container edit-container hidden">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-row form-spacing">
                    <div class="mb-3">
                        <label class="form-label" for=" profilePicture">Edit Profilepicture</label>
                        <input type="file" class="form-control form-border" name="profilePicture" id="profilePicture">
                       <!-- <small class="form-text text-muted" for="removeProfilePicture">Do you want to remove your current profile picture?</small>
                        <input type="checkbox" name="removeProfilePicture" id="removeProfilePicture">-->
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
                        <input type="password" class="form-control form-border" name="password" id="password">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label" for="passwordConfirm">Confirm Password</label>
                        <input type="password" class="form-control form-border" id="passwordConfirm" name="passwordConfirm" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">please verify by entering your current password</small>
                    </div>
                    <button type="submit" class="w-100 btn btn-lg">Update</button>
            </form>

        </div>
        <div class="container">
        <a href="logout.php">logout</a></div>
    </main>
   
    
</body>

</html>