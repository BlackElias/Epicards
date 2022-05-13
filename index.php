<?php
include_once("bootstrap.php");
include_once("header.inc.php");
try {
   $user = new User();
   $currentUserId = $_SESSION["userId"];
   $currentUser = $user->getUserInfo($currentUserId);
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
   <link rel="stylesheet" href="css/index.css">
   <title>Epicards Home</title>
</head>

<body>
   <div class="index_container">
      <h1>My collection</h1>
      <!-- collectie me php -->

      <?php

      $feed = Collection::getFeedCollections();
      // var_dump(Collection::getFeedCollections());

      $i = 0;
      foreach ($feed as $collection) : if ($i == 20) {
            break;
         } ?>

         <?php include("collection.inc.php"); ?>
      <?php $i++;
      endforeach;  ?>

      <button class="btn-collection"><a href="newcollection.php">New collection</a></button>
   </div>
</body>

</html>