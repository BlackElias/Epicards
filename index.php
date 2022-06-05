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
$cards = Collection::getCards();
$total = array_column($cards, 'collection_id');
unset($_SESSION['collection_id']);
// var_dump($total);
// $collection = new Collection();
// $collectionID = $collection->getCollectonId();
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
   <title>Epicards Home</title>
</head>

<body>
   <div class="index_container">
      <h1>My collections</h1>
      <!-- collectie me php -->
      <div class="collections_scroll">
         <?php

         $feed = Collection::getFeedCollections();


         $i = 0;
         foreach ($feed as $collection) : if ($i == 20) {

               break;
            } ?>

            <a class="collection-text" href="collection.php?title=<?php echo $collection["collection_name"] ?>&id=<?php echo $collection["collection_id"] ?>&type=<?php echo $collection["collection_type"] ?>">
               <div class="container">
                  <div class="collection-pokemon">
                        <div class="collection_card_text">
                           <div class="cards_amount">
                              <p><?php 
                                 
                                 
                                 //in index doe ik call $total dit laat kaarten collectie id zien van kaarten in de collectie
                                 //dus ik moet zien of die welke kaarten id het zelfde zijn en als die gelijk zijn aan collectie id, telt ge ze op

                              //collectie id    var_dump($collection["collection_id"]);
                           // if( $collection["collection_id"] == $total){
                              // echo array_search($collection["collection_id"], $total); 
                           //} 
                                    //  var_dump(  $collection["collection_id"]== $total);
                              // echo  count(Collection::getCards()) 
                              echo Collection::countCards($collection["collection_id"]);
                              ?></p>
                           <p class="">cards</p>
                        </div>

                        <p class="collection_title"> <img src="assets/card_icon.svg" class="card_icon" alt=""><span class="coll_title-text"><?php echo htmlspecialchars($collection['collection_name']) ?></span></p>
                     </div>
                  </div>
               </div>
            </a>
         <?php $i++;
         endforeach;  ?>
      </div>
      <button class="btn-collection button_sec"><a href="newcollection.php"><img src="assets/plus_icon.svg" alt="plus icon" class="plus_icon"> New collection</a></button>
   </div>
</body>

</html>