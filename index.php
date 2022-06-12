<?php

use src\php\classes\Trade\Trade;

include_once("bootstrap.php");
//error_reporting(E_ALL);
//ini_set("display_errors","On");
try {
   $user = new User();
   $currentUserId = $_SESSION["userId"];
   $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
   $error = $th->getMessage();
}
$cards = Collection::getCards();
$total = array_column($cards, 'collection_id');
unset($_SESSION['collection_id']);
// var_dump($total);
// $collection = new Collection();
// $collectionID = $collection->getCollectonId();
$premium = User::checkPremium();
//$private = Collection::getFeedCollectionsPrivate();
include_once("header.inc.php");
include_once("navbar.inc.php");
if (!empty($_POST)) {
   $_SESSION["collection"] = $_POST['id'];


   $_SESSION["collectionType"] = $_POST['type'];


   $_SESSION["collectionName"] = $_POST['title'];

   header("Location: collection.php");
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
   <link rel="stylesheet" href="css/bottom-navbar/collection_bar.css">
   <title>Epicards |  Home</title>
</head>

<body>
   <div class="index_container">
      <h1>My collections</h1>
      <!-- collectie me php -->
      <div class="collections_scroll">
         <?php

         $feed = Collection::getFeedCollections($currentUserId);


         $i = 0;
         foreach ($feed as $collection) : if ($i == 20) {

               break;
            } ?>
         <form action="" method="post">
            <button type="submit" class="collection-text" style="width: 100%;" >
            <input type="hidden" name="title" value="<?php echo $collection["collection_name"] ?>">
            <input type="hidden" name="id" value="<?php echo $collection["collection_id"] ?>">
            <input type="hidden" name="type" value="<?php echo $collection["collection_type"] ?>">
               <div class="container">
                  <div class="collection-pokemon">
                     <div class="collection_card_text">
                        <div class="cards_amount">
                           <p><?php

                              echo Collection::countCards($collection["collection_id"]);
                              ?></p>
                           <p class="">cards</p>
                        </div>
          </form>
                        <p class="collection_title"> <img src="assets/card_icon.svg" class="card_icon" alt=""><span class="coll_title-text"><?php echo htmlspecialchars($collection['collection_name']) ?></span></p>
                     </div>
                  </div>
               </div>
         </button>
         </form>
         <?php $i++;
         endforeach;  ?>
         <div class="hidden_block"></div>
      </div>
      
      

      <?php

      if (count(Collection::getFeedCollections($currentUserId)) >= 3) {
         

         $check = array_column($premium, 'premium');

         if ($check[0]  == 'ja') {

            echo '<a href="newcollection.php"><button class="btn-collection button_sec"><img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon"> New collection</button></a> ';
         }if ($check[0]  == 'nee') {
            echo  '<div class="btn-middle">
                        <a href="premium.php"><button class="btn-premium-collection button_sec">get premium for more collections</button></a>
                  </div>';
         }
      } else {
        
         echo '<a href="newcollection.php"><button class="btn-collection button_sec"><img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon"> New collection</button></a> ';
      } ?>
   </div>
</body>

</html>