<?php
include_once("bootstrap.php");

?>

<div class="card_info" >
    <img  src="<?php echo htmlspecialchars($card['card_image']) ?>" alt="card image" class="card_img">
    <p class="card_name"><?php echo htmlspecialchars($card['card_name']) ?></p>
    <p id="card-price" class="euro">€ <?php echo htmlspecialchars($card['card_price']) ?></p>
    <form action="" method="post">
        <input type="hidden"name="cards_id" value="<?php echo htmlspecialchars($card['cards_id']) ?>">
    <button type="submit" name="delete" class="bin_icon" value="delete">&#x2715</button>
    </form>
</div>