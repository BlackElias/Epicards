<?php
include_once(__DIR__ . "/Db.php");
class Comment
{

    private $text;
    private $date;
    private $postId;
    private $userId;
    private $username;
    private $image;

    /**
     * Get the value of text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of postId
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set the value of postId
     *
     * @return  self
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get the value of userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
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
    }
    public function saveComment()
    {
        $conn = Db::getConnection();
        $sql = "INSERT INTO comments (text, post_id, user_id, created)  values (:text, :post_id, :user_id, UTC_TIMESTAMP() )";

        $statement = $conn->prepare($sql);
        $text = $this->getText();
        $postId = $this->getPostId();
        $userId = $this->getUserId();

        $statement->bindValue(":text", $text);
        $statement->bindValue(":post_id", $postId);
        $statement->bindValue(":user_id", $userId);

        $result = $statement->execute();
        return $result;
    }
    public static function getAllComments($postId)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM comments JOIN users ON users.id=comments.user_id WHERE post_Id = :postId");

        $statement->bindValue(':postId', $postId);

        $result = $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function time_elapsed_string($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) : 'just now';
    }
}
