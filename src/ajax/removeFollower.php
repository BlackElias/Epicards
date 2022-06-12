<?php
    include_once(__DIR__. "/../../bootstrap.php");
    use src\php\classes\User\User;
    use src\php\classes\Follower\Follower;
    use src\php\classes\db\Db;
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