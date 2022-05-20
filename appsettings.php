<?php
include_once("bootstrap.php");
include_once("header.inc.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/appsettings.css">
    <title>Settings</title>
</head>

<body>
    <div class="containter_appsettings">
        <!--  <a href="index.php"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"></a> -->
        <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"> </button>
        <h1>Settings</h1>

    </div> <button class="btn logout_btn"><a href="logout.php">logout</a></button>
</body>

</html>