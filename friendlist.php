<?php
include_once("bootstrap.php");
$conn = Db::getConnection();
try {
    $user = new User();
    $currentUserId = $_SESSION["userId"];
    $currentUser = $user->getUserInfo($currentUserId);

    $allFollowers = Follower::getAllFollowing($_SESSION["userId"]);
} catch (\Throwable $th) {
    $error = $th->getMessage();
}
if (!empty($_GET['query'])) {
    try {
        $user = new Follower;

        $searchresult = $_GET['query'];


        $users = $user->searchFollowers($searchresult);
    } catch (\Throwable $th) {
        $error = $th->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/zbb0stp.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Epicards | Friend list</title>
</head>

<body>
    <?php   // include_once("header.inc.php"); ?>
    <?php if (isset($error)) : ?>
        <div class="user-messages-area">
            <div class="alert alert-danger">
                <ul>
                    <li><?php echo $error ?></li>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <main>
    <div class="search">
                
                  <form action="" method="get">
                   <input type="text" id="name-input" placeholder="Search for other users" name="query" name="current-search" class="form_input card_input">
                    <button id="search-button" class="search_btn"><img src="assets/search_icon.svg" alt="search button" class="search_btn"></button></form>
               
    </div>
    <?php 
    var_dump(isset($_GET["query"]));
    if(isset($_GET["query"])){
        if (isset($users)) {
            foreach ($users as $searchresult) :  ?>

                <a class="search_text" href="people.php?id=<?php echo $searchresult['follower_id']; ?>&username=<?php echo $searchresult['username']; ?>">

                    <div class="searchresult"><img class="profile-pic_search" src=" <?php echo $searchresult['picture']; ?>"> <span class="username_search"> <?php echo $searchresult['username']; ?> </span></div>

                </a>

        <?php endforeach;
    }}else {
    
         echo'
        
         <div class="box-container">';?>
             <?php foreach ($allFollowers as $follower) : ?>
          <?php   echo'        <div class="profile-box">';
             echo'           <div class="profile-box-info">';
             echo'          <img class="profile-picture-big" src="'?><?php echo $follower["picture"] ?><?php echo'" alt="profile picture">';
             echo'           <div class="profile-box-names">';
                         echo'             <a href=" people.php?id='?><?php echo $follower["id"] ?><?php echo '">
                                           <h1>'?><?php echo htmlspecialchars($follower["username"]) ?><?php echo '</h1>';
                         echo'               </a>';
                         echo'            </div>';
                         echo'         </div>';
                         echo'      </div>';
                         echo 'test'?>
                           <?php endforeach; 
        } ?>
        </div> 
    </main>
</body>

</html>