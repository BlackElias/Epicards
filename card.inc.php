<?php
include_once("bootstrap.php");

?>

<div class="card_info" onclick="onlyBtn<?php echo $i ?>(this.id)" id="myBtn<?php echo $i ?>">
  <img src="<?php echo htmlspecialchars($card['card_image']) ?>" alt="card image" class="card_img">
  <p class="card_name"><?php echo htmlspecialchars($card['card_name']) ?></p>
  <p id="card-price" class="euro price_name">€ <?php echo htmlspecialchars($card['card_price']) ?></p>
  <form action="" method="post">
    <input type="hidden" name="cards_id" value="<?php echo htmlspecialchars($card['cards_id']) ?>">
    <button type="submit" name="delete" class="bin_icon" value="delete">&#x2715</button>
  </form>
</div>

<!-- The Modal -->
<div id="myModal<?php echo $i ?>" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    
    <span class="close" onclick="onlySpan<?php echo $i ?>(this.id)">&times;</span>
    <p class="card_name-modal"><?php echo htmlspecialchars($card['card_name']) ?></p>
    <img src="<?php echo htmlspecialchars($card['card_image']) ?>" alt="card image" class="card_img_big">
    <p id="card-price" class="euro modal_price">€ <?php echo htmlspecialchars($card['card_price']) ?></p>
    <form action="" method="POST">
          <input type="hidden" name="image" value="<?php echo htmlspecialchars($card['card_image']) ?>"></input>
          <input type="hidden" name="CardId" value="<?php echo htmlspecialchars($card['cards_id'])  ?>"></input>
          <input type="hidden" name="name" value="<?php echo htmlspecialchars($card['card_name'])?>"></input>
   
          <button type="submit" name="sell" value="sell card"  class="btn"><a href=""></a> sell card</button>
        </form>
  </div>

</div>
<script>
  var text = document.getElementById("text")
var arrow = document.getElementById("arrow")
  function onlyBtn<?php echo $i ?>(id) {


    var modal<?php echo $i ?> = document.getElementById("myModal<?php echo $i ?>");
    modal<?php echo $i ?>.style.display = "block";
    arrow.style.display = "none";
  text.style.display = "none";

  }

  function onlySpan<?php echo $i ?>(id) {

    var modal<?php echo $i ?> = document.getElementById("myModal<?php echo $i ?>")
    modal<?php echo $i ?>.style.display = "none";
    arrow.style.display = "inline";
  text.style.display = "block";

  }
</script>