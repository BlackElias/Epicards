<?php
ob_start();

use src\php\classes\User\User;
use src\php\classes\Image\Image;

include_once("bootstrap.php");

try {
  $user = new User();
  $currentUserId = $_SESSION["userId"];
  $currentUser = $user->getUserInfo($currentUserId);
} catch (\Throwable $th) {
  $error = $th->getMessage();
}

if (isset($_POST['image'])) {

  $img = $_POST['image'];


  $image_parts = explode(";base64,", $img);
  $image_type_aux = explode("image/", $image_parts[0]);
  $image_type = $image_type_aux[1];
  $folderPath = "upload/";
  $image_base64 = base64_decode($image_parts[1]);
  $fileName = "card" . $_SESSION["userId"] . '.png';

  $file = $folderPath . $fileName;
  file_put_contents($file, $image_base64);
  $del = new Image();

  $del->DeleteImages();
  try {
    $image = new Image();
    $image->setUserId($_SESSION["userId"]);
    $image->setImage($fileName);

    $image->saveImage();
    header("Location: addCard.php");
  } catch (\Throwable $th) {
    $error = $th->getMessage();
    //print_r($fileName);

  }
}
include_once("header2.inc.php");
include_once("navbar.inc.php");
$images = Image::getFeedImage();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Epicards | Scan Card</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/scan.css">
  <link rel="stylesheet" href="css/styles.css">
  <style type="text/css">
    #results {
      padding: 20px;
      border: 1px solid;
      background: #ccc;
    }

    #my_camera-ios_div {
      top: 10%;
    }

    #my_camera {
      padding-top: 0%;
      margin-left: -20%;
    }

    video {
      width: 100% !important
    }
  </style>
</head>

<body onload="myFunction()">



  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-background">
        <h3 styles="text-align: center;">Please center the card in the middle of your camera. Be sure that the Card name is clearly visible! <br> Then press submit.</h3>
        <span class="close button_sec">I understand</span>
      </div>
    </div>
  </div>
  <div class="col-md-12 text-center">
    <div class="container">


      <form method="POST" action="">

        <div class="row">

          <div id="my_camera" value=""></div>
          <br />

          <input type="hidden" name="image" class="image-tag">

          <div class="col-md-6">
            <div id="results" style="display: none ;"></div>
          </div>

          <br />

          <button type="submit" class="btn" onClick="take_snapshot()">Submit</button>

        </div>
    </div>
    </form>
  </div>

  <!-- Configure a few settings and attach camera -->
  <script language="JavaScript">
    Webcam.set({
      width: 410,
      height: 340,
      image_format: 'jpeg',
      jpeg_quality: 90,
      constraints: {

        facingMode: "environment"
      }
    });

    Webcam.attach('#my_camera');

    function take_snapshot() {
      Webcam.snap(function(data_uri) {
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
      });
    }
    // Get the modal
    var modal = document.getElementById("myModal");
    var modalbg = document.getElementById("modal-background");
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal

    function myFunction() {
      modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
      modalbg.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

</body>

</html>