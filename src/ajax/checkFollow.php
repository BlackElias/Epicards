<?php
    include_once(__DIR__. "/../../bootstrap.php");

    if(!empty($_POST)){
        $follower = new Follower();
        $follower->setFollower_id($_POST["followeduser"]);
        $follower->setUser_id($_SESSION["userId"]);

        $result = $follower->checkFollowed();

        $response = [
            'status' => 'checked',
            'result' => $result
        ];

        header('Content-Type: application/json');
        echo json_encode($response);


    }