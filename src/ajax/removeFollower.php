<?php
    include_once(__DIR__. "/../../bootstrap.php");

    if(!empty($_POST)){
        $follower = new Follower();
        $follower->setId($_POST["followid"]);

        $follower->removeFollower();

        $response = [
            'status' => 'unFollowed',
        ];

        header('Content-Type: application/json');
        echo json_encode($response);


    }