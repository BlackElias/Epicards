<?php
use src\php\classes\User\User;
use src\php\classes\Collection\Collection;
include_once("bootstrap.php");
try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}
$col = new Collection();
$currentCollectionId = $_SESSION["collection"];
$currentCollection = $col->getCollectionInfo($currentCollectionId);
//var_dump($_POST["delete"]);
//var_dump($_POST["collection_id"]);
$name = $_SESSION["collectionName"];


if (isset($_POST["info"])) {

    $col->setCollectionName($_POST['collection_name']);
    $col->setCollectionPrivate($_POST['private']);

    $col->updateInfo($currentCollectionId);


    header("Location: index.php");
}
//var_dump($_POST["collection_id"]);
if (isset($_POST["collection_id"])) {

    $col = new Collection();
    $col->setCollectonId($_POST["collection_id"]);
    $col->DeleteCollection2();
    header("Location: index.php");
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
    <link rel="stylesheet" href="css/editcollection.css">
    <link rel="stylesheet" href="css/bottom-navbar/collection_bar.css">
    <title>Epicards | Edit collection</title>
</head>

<body>
    <div class="edit_coll_container">
        <div class="top">
            <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"> </button>
            <h1 class="collection-name">Edit collection</h1>
        </div>
        <form action="" method="post">
            <div class="rename_coll">
                <?php if ($name == "Wishlist") {
    echo " ";
} else{
   echo' <label for="Change collection name">Rename collection</label>';
    echo'<input type="text" name="collection_name" value="';
     echo htmlspecialchars($currentCollection["collection_name"]);
      echo '" placeholder="Insert new collection name">';
       
}?>
                  </div>
            <div class="checkbox_public">
                <label for="unprivate" class="pointer">Visibility</label>
                <select name="private" id="unprivate">
                    <option value="private">Private collection</option>
                    <option value="unprivate">Public collection</option>
                </select>
            </div>
            <button type="submit" name="info" class="btn">Save</button>
        </form>
        <div class="flex_delete_btn">
            <a href="#popup1" class="delete_btn"><img src="assets/bin_icon.svg" alt="bin icon" class="bin_icon">Delete Collection</a>
        </div>
        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Are you sure?</h2>
                <p>Performing this action will permanently delete this collection with all the cards in it. This can't be undone!</p>
                <div class="content">
                    <a class="close" href="#" class="button_sec">cancel</a>
                    <form action="" method="post">
                        <input type="hidden" name="collection_id" value="<?php echo $_SESSION["collection"]; ?>">
                        <button type="submit" name="delete" value="delete" class="btn" id="delete">delete</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</body>

</html>