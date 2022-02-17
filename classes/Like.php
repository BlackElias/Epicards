<?php
include_once(__DIR__ . "/Db.php");
class Like
{
    private $id;
    private $post_id;
    private $user_id;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of post_id
     */
    public function getPost_id()
    {
        return $this->post_id;
    }

    /**
     * Set the value of post_id
     *
     * @return  self
     */
    public function setPost_id($post_id)
    {
        $this->post_id = $post_id;

        return $this;
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

    public function saveLike()
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("INSERT INTO likes (post_id, user_id) VALUES (:post_id, :user_id)");

        $post_id = $this->getPost_id();
        $user_id = $this->getUser_id();

        $statement->bindValue(":post_id", $post_id);
        $statement->bindValue(":user_id", $user_id);

        $result = $statement->execute();

        return $result;
    }

    public function removeLike()
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("DELETE FROM likes WHERE id = :id");

        $id = $this->getId();

        $statement->bindValue(":id", $id);

        $result = $statement->execute();

        return $result;
    }

    public function checkLiked()
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM likes WHERE user_id = :user_id AND post_id = :post_id");

        $user_id = $this->getUser_id();
        $post_id = $this->getPost_id();

        $statement->bindValue(":user_id", $user_id);
        $statement->bindValue(":post_id", $post_id);

        $statement->execute();
        $result = $statement->fetchAll();

        return $result;
    }

    public static function getAllLikesOnPost($post_id)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM likes JOIN users ON users.id = likes.user_id WHERE post_id = :post_id");

        $statement->bindValue(":post_id", $post_id);

        $statement->execute();
        $result = $statement->fetchAll();

        return $result;
    }
}
