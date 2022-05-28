<?php
include_once("bootstrap.php");

?>

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
                     ?></p>
                    <p class="">cards</p>
                </div>
               
                <p class="collection_title"> <img src="assets/card_icon.svg" class="card_icon" alt=""><?php echo htmlspecialchars($collection['collection_name']) ?></p>
            </div>

        </div>
</a>

</div>