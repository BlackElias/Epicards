<?php
include_once("bootstrap.php");

?>
<div>
<p><?php echo htmlspecialchars($card['card_name']) ?></p>
<img src="<?php echo htmlspecialchars($card['card_image']) ?>" alt="">
<p>Price: <?php echo htmlspecialchars($card['card_price']) ?></p>
</div>