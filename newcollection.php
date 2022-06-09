<?php
include_once("bootstrap.php");
include_once("header.inc.php");
include_once("navbar.inc.php");

//var_dump($_POST);
//var_dump($_SESSION["userId"]);


if (isset($_POST["pokemon"])) {
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

if (isset($_POST["yugioh"])) {
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
if (isset($_POST["MTG"])) {
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
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bottom-navbar/collection_bar.css">
  <link rel="stylesheet" href="css/newcollection.css">
  <title>new collection</title>
</head>

<body>
  <div class="newcollection_container">
    <div class="top">
      <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"></button>
      <h1>Add collection</h1>
    </div>

    <form action="" method="POST">
      
      <div class="checkbox_public">
                <h3 for="unprivate" class="pointer">Make Collection</h3>
                <select name="private" id="unprivate">
                    <option value="private">Private </option>
                    <option value="unprivate">Public</option>
                </select>
            </div>
      

      <div class="collection_input">
        <!-- <h3>Collection name</h3> -->

        <label for="collection_input"  class="input_label">Collection name</label>
        <input type="name" placeholder="Enter the name of your collection" name="name" class="input_field" required="required" id="collection_input">

      </div>

      <div class="collection_type">
        <h3>Type collection</h3>
        <div class="type_buttons">

          <label>
            <input id="Check1" onclick="selectOnlyThis(this.id)" type="checkbox" name="pokemon" value="pokemon" class="collection_type_button pkmn_type">
            <img src="assets/pkmn_logo.svg" alt="pokemon logo" class="cardlogos pkmn_type">
          </label>
          <label>
            <input id="Check2" onclick="selectOnlyThis(this.id)" type="checkbox" name="yugioh" value="yugioh" class="collection_type_button yug_type">
            <img src="assets/yug_logo.svg" alt="yu-gi-oh! logo" class="cardlogos yug_type">
          </label>
          <label>
            <input id="Check3" onclick="selectOnlyThis(this.id)" type="checkbox" name="MTG" value="MTG" class="collection_type_button mtg_type">
            <img src="assets/mtg_logo.svg" alt="Magic: The Gathering logo" class="cardlogos mtg_type">
          </label>
        </div>
      </div>
      <button type="submit" name="collection" class="btn make-coll_btn">save</button>
    </form>
  </div>
</body>
<script src="src/js/collection.js"></script>
</html>