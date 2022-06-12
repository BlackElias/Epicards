<?php
use src\php\classes\Cards\Cards;


include_once("bootstrap.php");
try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}

if (isset($_POST["sell"])) {
$_SESSION["cardName"] = $_POST["cardName"];
$_SESSION["cardPrice"] =$_POST["cardPrice"];
$_SESSION["cardImage"] =$_POST["cardImage"];
$_SESSION["cardId"] =$_POST["cardId"];
header("Location: sell.php");
}
if (isset($_POST["buy"])) {
    $_SESSION["cardName"] = $_POST["cardName"];
    $_SESSION["cardPrice"] =$_POST["cardPrice"];
    $_SESSION["cardImage"] =$_POST["cardImage"];
    $_SESSION["cardId"] =$_POST["cardId"];
    header("Location: buy.php");
    }


if (!empty($_POST["cardName"])) {

    try {
        $card = new Cards();
        $card->setCollectionId($_POST['id']);

        $card->setCard_name($_POST["cardName"]);
        $card->setCard_price($_POST["cardPrice"]);
        $card->setCard_image($_POST["cardImage"]);



        $card->saveCards();
    } catch (\Throwable $th) {
        $error = $th->getMessage();
    }
}




if (!empty($_GET['query'])) {
    try {
        $user = new User;

        $searchresult = $_GET['query'];


        $users = $user->searchusers($searchresult);
    } catch (\Throwable $th) {
        $error = $th->getMessage();
    }
}
if (!empty($_GET['shops'])) {
    try {
        $user = new User;

        $searchresult = $_GET['shops'];


        $users = $user->searchShop($searchresult);
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
    <title>Epicards | Search</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/search_trade_sell.css">
    <link rel="stylesheet" href="css/bottom-navbar/trade_sell_bar.css">

</head>
<nav>

</nav>

<body>
    <div class="input-field col s12">

        <div class="top-flex">
            <div class="search">
                <?php if (isset($_GET["cards"])) {
                    echo   '<input type="text" id="name-input" placeholder="Search for cards" name="query" name="current-search" class="form_input card_input">';
                    echo   '<button id="search-button" class="search_btn"><img src="assets/search_icon.svg" alt="search button" class="search_btn"></button>';
                } else if (isset($_GET["shops"])) {
                    echo  '<form action="" method="get">';
                    echo  '<input type="text" id="name-input" placeholder="Search for shops" name="shops" name="current-search" class="form_input card_input">';
                    echo  '<button id="search-button" class="search_btn"><img src="assets/search_icon.svg" alt="search button" class="search_btn"></button></form>';
                } else {
                    echo  '<form action="" method="get">';
                    echo  '<input type="text" id="name-input" placeholder="Search for other users" name="query" name="current-search" class="form_input card_input">';
                    echo  '<button id="search-button" class="search_btn"><img src="assets/search_icon.svg" alt="search button" class="search_btn"></button></form>';
                } ?>
                <div class="search_category">
                    <button><a href="search_buy_sell.php">people</a></button>
                    <span class="vl_line"></span>
                    <button><a href="search_buy_sell.php?shops=">shops</a></button>
                    <span class="vl_line"></span>
                    <button class=""><a href="search_buy_sell.php?cards=">cards</a></button>
                </div>
            </div>
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
        <div class="center_btn">
            <a href="trade_sell.php" class="cancel_btn"><img src="assets/x_icon.svg" alt="x icon" class="x_icon">cancel search</a>
        </div>

        <?php if (isset($users)) {
            foreach ($users as $searchresult) :  ?>

                <a class="search_text" href="people.php?id=<?php echo $searchresult['id']; ?>&username=<?php echo $searchresult['username']; ?>">

                    <div class="searchresult"><img class="profile-pic_search" src=" <?php echo $searchresult['picture']; ?>"> <span class="username_search"> <?php echo $searchresult['username']; ?> </span></div>

                </a>

        <?php endforeach;
        } ?>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span onclick="document.getElementById('myModal').style.display='none'" class="close">&times; close</span>
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
                <form action="" method="post">

                    <input id="addCard-data" type="hidden" value="" name="cardName"></input>
                    <input id="addCard-price" type="hidden" value="" name="cardPrice"></input>
                    <input id="addCard-image" type="hidden" value="" name="cardImage"></input>

                    <link rel="stylesheet" href="css/bottom-navbar/trade_sell_bar.css">
                <input type="hidden" value="" name="id"></input>
                <input id="buyCard" type="hidden" name="buyCardId" href="">

                <button class="btn" name="buy" type="submit">buy </button>

                <input id="sellCard" type="hidden" name="cardId" value="">
                
                <button class="btn" name="sell" type="submit">sell </button></form>
            </div>
        </div>
    </div>
    <!-- The Modal -->

    <?php if (isset($_GET["cards"])) {
        echo '<script src="src/js/search.js"></script>';
    } ?>

</body>

</html>