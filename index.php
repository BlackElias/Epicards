<?php
include_once("bootstrap.php");
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
    <title>Epicards Home</title>
</head>
<body>
    <h1>My collection</h1>
    <!-- collectie me php -->



    <button class="btn-collection"><a href="newcollection.php">New collection</a></button>
</body>
</html>