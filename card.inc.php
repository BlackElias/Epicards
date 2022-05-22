<?php
include_once("bootstrap.php");

?>
<div class="card_info">
    <img src="<?php echo htmlspecialchars($card['card_image']) ?>" alt="card image" class="card_img">
    <p><?php echo htmlspecialchars($card['card_name']) ?></p>
    <p>Price: <?php echo htmlspecialchars($card['card_price']) ?></p>
    <button type="submit" name="delete" class="bin_icon" value="DELETE"><img src="assets/bin_icon.svg" alt=""></button>
</div>