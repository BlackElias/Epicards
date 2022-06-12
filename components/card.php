<?php
include_once("bootstrap.php");

?>

<div class="card_info"  onclick="onlyBtn<?php echo $i ?>(this.id)" id="myBtn<?php echo $i ?>">
    <img  src="<?php echo htmlspecialchars($card['card_image']) ?>" alt="card image" class="card_img">
    <p class="card_name"><?php echo htmlspecialchars($card['card_name']) ?></p>
    <p id="card-price" class="euro">€ <?php echo htmlspecialchars($card['card_price']) ?></p>
    <form action="" method="post">
        <input type="hidden"name="cards_id" value="<?php echo htmlspecialchars($card['cards_id']) ?>">
    <button type="submit" name="delete" class="bin_icon" value="delete">&#x2715</button>
    </form>
</div>

<!-- The Modal -->
<div  id="myModal<?php echo $i ?>" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="onlySpan<?php echo $i ?>(this.id)" >&times;</span>
        <img  src="<?php echo htmlspecialchars($card['card_image']) ?>" alt="card image" class="card_img">
        <p class="card_name"><?php echo htmlspecialchars($card['card_name']) ?></p>
        <p id="card-price" class="euro">€ <?php echo htmlspecialchars($card['card_price']) ?></p>

  </div>

</div>
<script> function onlyBtn<?php echo $i ?>(id) {
  
 
  var modal<?php echo $i ?> = document.getElementById("myModal<?php echo $i ?>");
 modal<?php echo $i ?>.style.display = "block";


}
function onlySpan<?php echo $i ?>(id) {
  
  var modal<?php echo $i ?> = document.getElementById("myModal<?php echo $i ?>")
   modal<?php echo $i ?>.style.display = "none";


}

</script>