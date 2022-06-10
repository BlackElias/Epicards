<?php
    include_once(__DIR__. "/../../bootstrap.php");
 
    if(!empty($_POST)){
        $follower = new Follower();
        $follower->setFollower_id($_POST["followeduser"]);
        $follower->setUser_id($_SESSION["userId"]);

        $result = $follower->saveFollower();

        $response = [
            'status' => 'following',
            'result' => $result,
            'followeduser' => $_POST["followeduser"],
            'follower' => $_SESSION["userId"]
        ];

        header('Content-Type: application/json');
        echo json_encode($response);


    }