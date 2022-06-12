<?php
use src\php\classes\User\User;
include_once("bootstrap.php");
$premium = User::checkPremium();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/header.css">
 
  <link rel="shortcut icon" type="image/jpg" href="assets/favicon.svg"/>
</head>

<body>
  <div class="container_header">
    <a href="index.php"> <img src="assets/favicon.svg" alt="logo" class="favicon"></a>
    <?php $check = array_column($premium, 'premium');

    if ($check[0]  == 'ja') {
      echo  '<p class="btn_premium" style="opacity:0;"> premium</p>';
    } else {
      echo  '<a href="premium.php" class="btn_premium">go premium</a>';
    } ?>
    <a href="#"><img src="assets/notification.svg" alt="cart icon" class="icon cart_icon"></a>
    <a href="appsettings.php"><img src="assets/settings_icon.svg" alt="cart icon" class="icon cart_icon"></a>
  </div>

</body>

</html>