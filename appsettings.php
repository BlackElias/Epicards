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
    <link rel="stylesheet" href="css/header_settings.css">
    <title>Epicards | Profile</title>
</head>

<body>
    <div class="appsettings_container">
        <div class="top">
            <button onclick="history.go(-1);"><img src="assets/back_arrow.svg" alt="back arrow" class="back_arrow"></button>
            <h1>Settings</h1>
        </div>
        <div class="settings_scroll">
            <div class="settings_btn">
                <div class="one_btn">
                    <img src="assets/notification.svg" alt="">
                    <a href="#">Notifications</a>
                </div>
                <div class="one_btn">
                    <img src="assets/globe.svg" alt="">
                    <a href="#">Language and region</a>
                </div>
                <div class="one_btn">
                    <img src="assets/dollar-sign.svg" alt="">
                    <a href="#">Currency</a>
                </div>
                <div class="one_btn">
                    <img src="assets/credit-card.svg" alt="">
                    <a href="#">Payments</a>
                </div>

                <div class="flex_delete_btn">
                    <a href="#popup1" class="delete_btn">
                        <div class="one_btn">
                            <img src="assets/info (1).svg" alt="">
                            <span>Contact</span>
                        </div>
                    </a>
                </div>

                <div id="popup1" class="overlay">
                    <div class="popup">
                        <a class="close" href="#" class="button_sec">&times;</a>
                        <h2>Send us an email!</h2>
                        <p>Do you have any questions or feedback? <br> Or are you interested in working together? <br> Please don't hesitate and send us an email!</p>
                        <div class="content">
                            <a href="mailto:epicards@eliasv.be" class="button_sec">Contact us</a>
                        </div>
                    </div>
                </div>


            </div>

            <div class="container">
                <a href="logout.php" class="btn" style="text-align:center; width: 90px;">logout</a>
            </div>
            <div class="hidden">
                <p>hidden</p>
            </div>
        </div>
</body>

</html>