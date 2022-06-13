<?php
use src\php\classes\User\User;
use src\php\classes\Sell\Sell;

include_once("bootstrap.php");
try {
  $user = new User();
  $currentUserId = $_SESSION["userId"];
  $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
  $error = $th->getMessage();
}
$username[0] = $currentUser;
$usern =  array_column($username, "username");

$_SESSION["username"] = $usern[0];


if (!empty($_POST)) {
  try {
    $sell = new Sell();
    $sell->setName($_POST["name"]);
    $sell->setUserId($_SESSION["userId"]);
    $sell->setUsername($_SESSION["username"]);
    // $user->checkEmail();

    $sell->setPrice($_POST["price"]);
    //  $user->checkUsername();

    $sell->setCardId($_POST["CardId"]);
    $sell->setImage($_POST["image"]);


    $sell->save();



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
  <link rel="stylesheet" href="css/collection.css">
  <link rel="stylesheet" href="css/bottom-navbar/collection_bar.css">
  <title>Epicards | Sell</title>
</head>

<body>

  <?php //echo htmlspecialchars($_GET['id']); 
  ?>
  <div class="collection_container">
    <div class="top">
      <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"> </button>
      <h1 class="collection-name" style="margin-right:30%;">Sell Card</h1>

    </div>
</div>


    <div>
      <div class="sell_scroll" style="height: 60vh; overflow:scroll">
        <h1><?php echo  htmlspecialchars($_SESSION["cardName"]) ?></h1>
        <img src="<?php echo  htmlspecialchars($_SESSION["cardImage"]) ?>" alt="" style="width: 50%; margin-left: 25%;">
        <br>

        <form action="" method="POST">
          <input type="hidden" name="image" value="<?php echo  htmlspecialchars($_SESSION["cardImage"]) ?>"></input>
          <input type="hidden" name="CardId" value="<?php echo  htmlspecialchars($_SESSION["cardId"]) ?>"></input>
          <input type="hidden" name="name" value="<?php echo  htmlspecialchars($_SESSION["cardName"]) ?>"></input>
          <label style="margin-left:20% !important; margin-bottom: 5%" for="">Price</label>
          <input style="margin-bottom: 2% !important;  margin-top: 2% !important; width: 40% !important; display: inline ;" type="text" name="price" class="form_input card_input" id=""></input>
          <button type="submit" href="" class="btn">sell card</button>
        </form>
        <div class="hidden_block">hidden</div>
      </div>
    </div>

</body>
<script src="src/js/app.js"></script>
<style>

</style>

</html>