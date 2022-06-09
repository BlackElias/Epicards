<?php
include_once("bootstrap.php");
include_once("header.inc.php");
include_once("navbar.inc.php");
try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}


if (isset($_POST["delete"])) {

    $sell = new Sell();
    $sell->setId($_POST["id"]);
    $sell->Delete();
    header("Location: index.php");
}
  $feed = Sell::getFeedSell();
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
    <title>Document</title>
</head>

<body>
    <input type="text" class="form_input card_input" id="card" name="card" placeholder="search card"></input>
    <?php //echo htmlspecialchars($_GET['id']); 
    ?>
    <div class="collection_container">
        <div class="top">
            <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"> </button>
            <h1 class="collection-name">Buy <?php echo htmlspecialchars($_SESSION["cardName"]) ?></h1>
           
        </div>
        <?php

$i = 0;
foreach ($feed as $row) : if ($i == 20) {
        break;
    } ?>
 <h1></h1>
 <form action="" method="post">
   <p>User: <?php echo htmlspecialchars($row['username']) ?></p>
   
  <p>Price: <?php echo htmlspecialchars($row['price'])  ?> €</p>
  <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id'])  ?>">
   <button type="submit" href="" class="btn" name="delete">buy card</button>
</form>
<?php $i++;
endforeach;  ?>


   
</body>
<script src="src/js/app.js"></script>
<style>

</style>

</html>
