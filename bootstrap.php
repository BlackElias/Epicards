<?php
// namespace bootstrap;
spl_autoload_register(function () {
    include_once("src/php/classes/Collection.php");
    include_once("src/php/classes/Db.php");
    //include_once("classes/Post.php");
    include_once("src/php/classes/User.php");
    include_once("src/php/classes/Image.php");
    include_once("src/php/classes/Cards.php");
    include_once("src/php/classes/Image.php");
    include_once("src/php/classes/Sell.php");
    include_once("src/php/classes/Trade.php");
    include_once("src/php/classes/Followers.php");
    
});

session_start();
if (isset($_SESSION["userId"]) || preg_match('(signup.php|login.php)', $_SERVER['SCRIPT_NAME'])) {
} else {
    header("Location: login.php");
}