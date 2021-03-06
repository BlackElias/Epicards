<?php
use src\php\classes\Cards\Cards;
use src\php\classes\User\User;
include_once("bootstrap.php");
error_reporting(0);
try {
   $user = new User();
   $currentUserId = $_SESSION["userId"];
   $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
   $error = $th->getMessage();
}


//$imageResource = "upload/card". $_SESSION["userId"]. ".png";




//var_dump( $text);
//var_dump($vision);
if (!empty($_POST["cardName"])) {

  try {
    $card = new Cards();
    $card->setCollectionId($_SESSION["collection"]);

    $card->setCard_name($_POST["cardName"]);
    $card->setCard_price($_POST["cardPrice"]);
    $card->setCard_image($_POST["cardImage"]);



    $card->saveCards();
  } catch (\Throwable $th) {
    $error = $th->getMessage();
  }
}
include_once("header2.inc.php");
include_once("navbar.inc.php");
?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/add_card.css">
  <link rel="stylesheet" href="src/css/style.css">
  <title>Epicards | add card</title>
</head>
<nav>

</nav>

<body>
  <div class="input-field col s12">
  
    <div class="search">
    
      <input type="text" id="name-input" placeholder="search name" name="current-search" value="" class="form_input card_input">
      <button id="search-button" class="search_btn"><img src="assets/search_icon.svg" alt="search button" class="search_btn">
        <p class="hide_text">hi</p>
      </button>
     
    </div>
   
    <select class="browser-default" id="generation-search" style="display:none ;">
      <option value="">Choose your option</option>
      <option value="generation/1">1</option>
      <option value="generation/2">2</option>
      <option value="generation/3">3</option>
      <option value="generation/4">4</option>
      <option value="generation/5">5</option>
      <option value="generation/6">6</option>
      <option value="generation/7">7</option>
    </select>


    <select class="browser-default" id="type-search" style="display:none ;">
      <option value="">Choose your option</option>
      <option value="Grass">Grass</option>
      <option value="Fire">Fire</option>
      <option value="Water">Water</option>
      <option value="Lightning">Lightning</option>
      <option value="Psychic">Psychic</option>
      <option value="Fighting">Fighting</option>
      <option value="Darkness">Darkness</option>
      <option value="Metal">Metal</option>
      <option value="Dragon">Dragon</option>
      <option value="Fairy">Fairy</option>
      <option value="Colorless">Colorless</option>
    </select>


  </div>
  </ul>
  </div>
  
  <div class="card_scroll">
    
    <div>
      <div class="col s12 m8 l9">
        <!-- Teal page content  -->
        <div class="row responsive-img" id="pokeResults">

        </div>
      </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
      <div class="modal-background">
        <span onclick="document.getElementById('myModal').style.display='none'" class="close">&times;</span>
        <div class="title_img_center">
        <h4 id="modal-card-name"></h4>
        <p id="modal-card-type"></p>
        <table class="responsive-table highlight">
          <p id="test"></p>

          <tbody>
            <tr>
              <td id="priceH">Holofoil Market Price</td>
              <td id="modal-HoloFoil-price"></td>
            </tr>
            <tr>
              <td id="priceR">Reverse Holofoil Market Price</td>
              <td id="modal-reverseHolofoil-price"></td>

            </tr>
            <tr>
              <td>Normal Market Price</td>
              <td id="modal-normal-price"></td>

            </tr>
          </tbody>
        </table>
        <img class="responsive-img" src="" alt="" id="modal-card-image">
        </div>
        <form action="search_card.php" method="post">

          <input id="addCard-data" type="hidden" value="" name="cardName"></input>
          <input id="addCard-price" type="hidden" value="" name="cardPrice"></input>
          <input id="addCard-image" type="hidden" value="" name="cardImage"></input>
          <input type="hidden" value="<?php echo htmlspecialchars($_SESSION["CollectionId"]) ?>" name="id"></input>
            <input type="hidden" value="<?php echo htmlspecialchars($_SESSION["collectionType"]) ?>" name="type"></input>
            <input type="hidden" value="<?php echo htmlspecialchars($_SESSION["collectionName"]) ?>" name="collection_name"></input>
            <button id="card-saver" type="submit" class="btn">add card</button>
       
           </form>
        
      </div>
    </div>
  </div>
  
  

  <!-- The Modal -->
  <a href="collection.php"> <button class="button_sec back_btn"> back to collection</button></a>
   <script src="src/js/wish_search.js"></script>



  

</body>

</html>