<?php
include_once(__DIR__ . "/Db.php");
class Follower
{
    private $id;
    private $user_id;
    private $follower_id;
    private $status;
    private $username;
    private $picture;

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
    } /**
    * Get the value of username
    */ 
   public function getUsername()
   {
       return $this->username;
   }

   /**
    * Set the value of username
    *
    * @return  self
    */ 
   public function setUsername($username)
   {
       $this->username = $username;

       return $this;
   }  /**
   * Get the value of picture
   */ 
  public function getPicture()
  {
      return $this->picture;
  }

  /**
   * Set the value of picture
   *
   * @return  self
   */ 
  public function setPicture($picture)
  {
      $this->picture = $picture;

      return $this;
  }

    public function saveFollower()
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("INSERT INTO followers (user_id, follower_id, username, picture) VALUES (:user_id, :follower_id, :username, :picture)");

        $user_id = $this->getUser_id();
        $follower_id = $this->getFollower_id();
        $username = $this->getUsername();
        $picture = $this->getPicture();
        $statement->bindValue(":username", $username);
        $statement->bindValue(":user_id", $user_id);
        $statement->bindValue(":picture", $picture);
        $statement->bindValue(":follower_id", $follower_id);

        $result = $statement->execute();

        return $result;
    }
    public static function searchFollowers($query)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM followers  WHERE INSTR(username, :query) AND user_id = :user_id");
        $statement->bindValue(":query", $query);
        $statement->bindValue(":user_id", $_SESSION["userId"]);
        $user = $statement->execute();
        $user = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $user;
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
