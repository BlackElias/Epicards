<?php

include_once("bootstrap.php");
include_once("header.inc.php");
include_once("navbar.inc.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/appsettings.css">

    <title>Epicards | Settings</title>

</head>

<body>
    <div class="appsettings_container">
        <div class="top">
            <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"></button>
            <h1>Settings</h1>
        </div>

        <div class="container">
            <a href="logout.php" class="logout-btn">logout</a>
        </div>
</body>

</html>