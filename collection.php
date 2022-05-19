
<?php 
include_once("bootstrap.php");
try {
   $user = new User();
   $currentUserId = $_SESSION["userId"];
   $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
   $error = $th->getMessage();
}


$_SESSION["collection"] = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/appsettings.css">
    <title>Document</title>
</head>
<body>
   <input type="text">search card<img src="" alt="">
   <?php //echo htmlspecialchars($_GET['id']); ?>
   <div>
     <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"> </button>
    
     <h1 class="collection-name"><?php echo htmlspecialchars($_GET["title"]) ?></h1>
     <!-- if change text and icon -->
    <a href=""><p>Visible to friends only</p></a>
    <img src="" alt="">
    
        <div class="collection-flex">
         <p>Colllection price:</p>
         <p>Card amount:</p>
        </div>
        <!-- if image -->
        <img src="" alt="">
        <p>There are no cards in this collection</p>
        <form action="addCard.php" method="POST">
            <input type="hidden" name="id" value="<?php echo  $_GET['id']?>"></input>
        <button type="submit" href="addCard.php">+ Add new card</button></form>
        <?php

$feed = Cards::getFeedCards();
 // var_dump(Cards::getFeedCards());

$i = 0;
foreach ($feed as $card) : if ($i == 20) {
      break;
   } ?>

   <?php include("card.inc.php"); ?>
<?php $i++;
endforeach;  ?>
    </div>
</body>
</html>