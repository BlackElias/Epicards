<?php
    include_once(__DIR__. "/../../bootstrap.php");
    use src\php\classes\User\User;
    use src\php\classes\Follower\Follower;
    use src\php\classes\db\Db;
    if(!empty($_POST)){
        $follower = new Follower();
        $follower->setFollower_id($_POST["followeduser"]);
        $follower->setUser_id($_SESSION["userId"]);
        $follower->setUsername($_POST["username"]);
        $follower->setPicture($_POST["picture"]);
        $result = $follower->checkFollowed();

        $response = [
            'status' => 'checked',
            'result' => $result
        ];

        header('Content-Type: application/json');
        echo json_encode($response);


    }