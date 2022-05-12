<?php


include_once("bootstrap.php");


var_dump($_POST);
var_dump($_SESSION["userId"]);


if (!empty($_POST["pokemon"])) {
  try {
    $col = new Collection();
   
    $currentUserId = $_SESSION["userId"];
   
    $col->setCollectionName($_POST["name"]);
   // $user->checkEmail();

    $col->setCollectionType($_POST["pokemon"]);
  //  $user->checkUsername();
 if (empty($_POST["private"])) {
    $_POST["private"] = "private";
 }
  $col->setCollectionPrivate($_POST["private"]);

$col->saveCollection($currentUserId);
   header("Location: index.php");
  } catch (\Throwable $th) {
    $error = $th->getMessage();
  }
}

if (!empty($_POST["yugioh"])) {
    try {
        $col = new Collection();
   
        $currentUserId = $_SESSION["userId"];
       
        $col->setCollectionName($_POST["name"]);
       // $user->checkEmail();
    
        $col->setCollectionType($_POST["yugioh"]);
      //  $user->checkUsername();
    
      $col->setCollectionPrivate($_POST["private"]);
     
    $col->saveCollection($currentUserId);
        header("Location: index.php");
    } catch (\Throwable $th) {
      $error = $th->getMessage();
    }
  }
  if (!empty($_POST["MTG"])) {
    try {
        $col = new Collection();
   
        $currentUserId = $_SESSION["userId"];
       
        $col->setCollectionName($_POST["name"]);
       // $user->checkEmail();
    
        $col->setCollectionType($_POST["MTG"]);
      //  $user->checkUsername();
    
      $col->setCollectionPrivate($_POST["private"]);
     
    $col->saveCollection($currentUserId);
        header("Location: index.php");
    } catch (\Throwable $th) {
      $error = $th->getMessage();
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new collection</title>
</head>
<body>
    
<form action="" method="POST">
<h2>Make collection Public</h2>

  <input type="checkbox" name="private"value="unprivate">
 

<label for="">Collection Name</label>
<input type="text" name="name">


<h3>type collection</h3>
<button type="submit" name="pokemon" value="pokemon"><img src="" alt=""></img>poke</input>
<button type="submit"name="yugioh" value="yugioh"><img src="" alt=""></img>yugi</input>
<button type="submit" name="MTG" value="MTG"><img src="" alt=""></img>mtg</input>


</form>
</body>

</html>