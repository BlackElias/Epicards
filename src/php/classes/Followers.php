<?php
include_once(__DIR__ . "/Db.php");
class Follower
{
    private $id;
    private $user_id;
    private $follower_id;
    private $status;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of user_id
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of follower_id
     */
    public function getFollower_id()
    {
        return $this->follower_id;
    }

    /**
     * Set the value of follower_id
     *
     * @return  self
     */
    public function setFollower_id($follower_id)
    {
        $this->follower_id = $follower_id;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function saveFollower()
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("INSERT INTO followers (user_id, follower_id) VALUES (:user_id, :follower_id)");

        $user_id = $this->getUser_id();
        $follower_id = $this->getFollower_id();

        $statement->bindValue(":user_id", $user_id);
        $statement->bindValue(":follower_id", $follower_id);

        $result = $statement->execute();

        return $result;
    }

    public function removeFollower()
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("DELETE FROM followers WHERE id = :id");

        $id = $this->getId();

        $statement->bindValue(":id", $id);

        $result = $statement->execute();

        return $result;
    }

    public function checkFollowed()
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM followers WHERE user_id = :user_id AND follower_id = :follower_id");

        $user_id = $this->getUser_id();
        $follower_id = $this->getFollower_id();

        $statement->bindValue(":user_id", $user_id);
        $statement->bindValue(":follower_id", $follower_id);

        $statement->execute();
        $result = $statement->fetchAll();

        return $result;
    }

    public static function getAllFollowing($user_id)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM followers JOIN users ON users.id = followers.follower_id WHERE user_id = :user_id");

        $statement->bindValue(":user_id", $user_id);

        $statement->execute();
        $result = $statement->fetchAll();

        return $result;
    }

    public static function getAllFollowers($user_id)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM followers JOIN users ON users.id = followers.follower_id WHERE follower_id = :user_id");

        $statement->bindValue(":user_id", $user_id);

        $statement->execute();
        $result = $statement->fetchAll();

        return $result;
    }
}
