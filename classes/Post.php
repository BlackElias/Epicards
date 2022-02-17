<?php

include_once(__DIR__ . "/Db.php");

class Post
{
    private $postId;
    private $userId;
    private $description;
    private $image;
    private $tags;



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
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        //CHECK IF EMPTY
        if (empty($description)) {
            throw new Exception("Description may not be empty!");
        }

        $this->description = $description;

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

    public function cleanupTags($tags)
    {
        $tags = strtolower($tags);
        $tags = str_replace(' ', '', $tags);
        return $tags;
    }

    /**
     * Get the value of tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set the value of tags
     *
     * @return  self
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get the value of created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @return  self
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the value of inappropriate
     */
    public function getInappropriate()
    {
        return $this->inappropriate;
    }

    /**
     * Set the value of inappropriate
     *
     * @return  self
     */
    public function setInappropriate($inappropriate)
    {
        $this->inappropriate = $inappropriate;

        return $this;
    }

    /**
     * Get the value of Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of Location
     *
     * @return  self
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    public function save()
    {
        $conn = Db::getConnection();

        $sql = "INSERT INTO posts (user_id, image, description, created, tags, location) VALUES (:user_id, :image, :description, UTC_TIMESTAMP(), :tags, :location)";
        $statement = $conn->prepare($sql);
        $user_id = $this->getUserId();
        $image = $this->getImage();
        $description = $this->getDescription();
        $tags = $this->getTags();
        $location = $this->getLocation();

        $statement->bindValue(":user_id", $user_id);
        $statement->bindValue(":image", $image);
        $statement->bindValue(":description", $description);
        $statement->bindValue(":tags", $tags);
        $statement->bindValue(":location", $location);
        $statement->execute();
    }

    public function flag()
    {
        $conn = Db::getConnection();

        $sql = "UPDATE posts SET inappropriate = 1 WHERE id = :id";
        $statement = $conn->prepare($sql);

        $id = $this->getPostId();
        $statement->bindValue(":id", $id);
        $statement->execute();

        return $this;
    }

    public function getflag()
    {
        $conn = Db::getConnection();

        $sql = "SELECT * FROM posts WHERE inappropriate = 1";
        $statement = $conn->prepare($sql);
        $statement->execute();
        $posts = $statement->fetchAll();

        return $posts;
    }

    public function delete()
    {
        $conn = Db::getConnection();

        $sql = "DELETE FROM posts WHERE id = :id";
        $statement = $conn->prepare($sql);

        $id = $this->getPostId();
        $statement->bindValue(":id", $id);
        $statement->execute();

        return $this;
    }

    public static function getFeedPosts()
    {
        $conn = Db::getConnection();

        $sql = "SELECT *, posts.id as postId FROM posts JOIN users ON users.id=posts.user_id WHERE  user_id != :user_id AND inappropriate = 0 ORDER BY created DESC;";
        $statement = $conn->prepare($sql);
        $user_id = $_SESSION["userId"];

        $statement->bindValue(":user_id", $user_id);
        $statement->execute();
        $posts = $statement->fetchAll();
        return $posts;
    }

    public static function getUserPosts($user_id)
    {
        $conn = Db::getConnection();

        $sql = "SELECT *, posts.id as postId FROM posts JOIN users ON users.id=posts.user_id WHERE  user_id = :user_id AND inappropriate = 0 ORDER BY created DESC; ";
        $statement = $conn->prepare($sql);

        $statement->bindValue(":user_id", $user_id);
        $statement->execute();
        $posts = $statement->fetchAll();
        return $posts;
    }

    public static function getPostsByTag($tag)
    {
        $conn = Db::getConnection();

        $sql = "SELECT *, posts.id as postId FROM posts JOIN users ON users.id=posts.user_id WHERE INSTR(tags, :tag) > 0 AND inappropriate = 0 ORDER BY created DESC; ";
        $statement = $conn->prepare($sql);
        $statement->bindValue(":tag", $tag);
        $statement->execute();
        $posts = $statement->fetchAll();
        return $posts;
    }

    public static function getPostsByLocation($Location)
    {
        $conn = Db::getConnection();

        $sql = "SELECT *, posts.id as postId, posts.location as postLocation FROM posts JOIN users ON users.id=posts.user_id WHERE posts.location = :location AND inappropriate = 0 ORDER BY created DESC; ";
        $statement = $conn->prepare($sql);
        $statement->bindValue(":location", $Location);
        $statement->execute();
        $posts = $statement->fetchAll();
        return $posts;
    }

    public static function getPostsByContent($query)
    {
        $conn = Db::getConnection();

        $sql = "SELECT *, posts.id as postId, posts.location as postLocation FROM posts JOIN users ON users.id=posts.user_id WHERE INSTR(tags, :query) OR INSTR(description, :query) AND inappropriate = 0 ORDER BY created DESC; ";
        $statement = $conn->prepare($sql);
        $statement->bindValue(":query", $query);
        $statement->execute();
        $posts = $statement->fetchAll();
        return $posts;
    }

    public function searchLocation($searchLocation)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM users  WHERE location = :searchResult GROUP BY location");
        $statement->bindValue(":searchResult", $searchLocation);

        $user = $statement->execute();
        $user = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }
    //source: https://stackoverflow.com/questions/1416697/converting-timestamp-to-time-ago-in-php-e-g-1-day-ago-2-days-ago
    public static function time_elapsed_string($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago); //php function to get datetime difference

        $diff->w = floor($diff->d / 7); //round off week number
        $diff->d -= $diff->w * 7; //amount of days ago

        $string = array( //display text
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) { //check if y,m,w,d,h,i,s is not null in $diff
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : ''); //set value of string to correct time
            } else {
                unset($string[$k]); //unset if y,m,w,d,h,i,s is null in $diff
            }
        }
        if (!$full) $string = array_slice($string, 0, 1); //get first time unit
        return $string ? implode(', ', $string) : 'just now'; //if no string -> return "just now"
    }
    public function searchtags($searchtags)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT tags FROM posts  WHERE tags = :tags");
        $statement->bindValue(":tags", $searchtags);

        $user = $statement->execute();
        $user = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }
}
