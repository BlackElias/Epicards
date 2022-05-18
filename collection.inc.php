<?php
include_once("bootstrap.php");

?>

<a class="collection-text" style="text-decoration: none; color:black" href="collection.php?title=<?php echo $collection["collection_name"] ?>&id=<?php echo $collection["id"] ?>">
<div class="container">
    <div class="collection-pokemon">
        <img src="" alt=""></img>
        <p>cards</p>
        <p><?php echo htmlspecialchars($collection['collection_name']) ?></p>
    </div>
    </a>

    </div>