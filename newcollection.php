<?php
include_once("bootstrap.php");
include_once("header.inc.php");
include_once("navbar.inc.php");

//var_dump($_POST);
//var_dump($_SESSION["userId"]);


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
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/newcollection.css">
  <link rel="stylesheet" href="css/bottom-navbar/collection_bar.css">
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
        <label for="unprivate" class="pointer">Make collection Public</label>
        <input type="checkbox" name="private" value="unprivate" id="unprivate" class="pointer">
      </div>

      <div class="collection_input">
        <!-- <h3>Collection name</h3> -->
        <label for="collection_input" class="input_label">Collection name</label>
        <input type="text" name="name" class="input_field" id="collection_input">
      </div>

      <div class="collection_type">
        <h3>Type collection</h3>
        <div class="type_buttons">
          <button type="submit" name="pokemon" value="pokemon" class="collection_type_button pkmn_type"><img src="assets/pkmn_logo.svg" alt=""></img>
            <p class="type_class">poke</p> </input>
            <button type="submit" name="yugioh" value="yugioh" class="collection_type_button yug_type"><img src="assets/yug_logo.svg" alt=""></img>
              <p class="type_class">yugi</p> </input>
              <button type="submit" name="MTG" value="MTG" class="collection_type_button mtg_type"><img src="assets/mtg_logo.svg" alt=""></img>
                <p class="type_class">mtg</p> </input>
        </div>

      </div>

    </form>
  </div>
</body>

</html>