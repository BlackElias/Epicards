<?php
    include_once(__DIR__. "/../../bootstrap.php");
    use src\php\classes\User\User;
    use src\php\classes\Follower\Follower;
    use src\php\classes\db\Db;
    if(!empty($_POST)){
        $follower = new Follower();
        $follower->setFollower_id($_POST["followeduser"]);
        $follower->setUsername($_POST["username"]);
        $follower->setUser_id($_SESSION["userId"]);
        $follower->setPicture($_POST["picture"]);
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