<?php
include_once("bootstrap.php");

?>

<a class="collection-text" href="collection.php?title=<?php echo $collection["collection_name"] ?>&id=<?php echo $collection["collection_id"] ?>">
    <div class="container">
        <div class="collection-pokemon">
            <div class="collection_card_text">
                <div class="cards_amount">
                    <p>0</p>
                    <p class="">cards</p>
                </div>
               
                <p class="collection_title"> <img src="assets/card_icon.svg" class="card_icon" alt=""><?php echo htmlspecialchars($collection['collection_name']) ?></p>
            </div>

        </div>
</a>

</div>