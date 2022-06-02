<?php
include_once(__DIR__ . "/Db.php");
class Image
{
    private $userId;
    private $image;
    private $type;
    private $id;


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
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
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

    public function saveImage()
    {
       
            $conn = Db::getConnection();
    
            $sql = "INSERT INTO image (user_id, image ) VALUES (:user_id, :image )";
            
            $statement = $conn->prepare($sql);
           // $currentUserId =$this->getUserId();
            $image = $this->getImage();
            $id = $this->getUserId();
      
            
            $statement->bindValue(":user_id", $id);
            $statement->bindValue(":image", $image);
          
            $statement->execute();
        
    }
    public static function getFeedImage()
    {
        $conn = Db::getConnection();

        $sql = "SELECT * FROM image WHERE  user_id = :user_id ";
        $statement = $conn->prepare($sql);
        $user_id = $_SESSION["userId"];

        $statement->bindValue(":user_id", $user_id);
        $statement->execute();
        $image = $statement->fetchAll();
        return $image;
    }
    public function DeleteImages()
    {
        $conn = Db::getConnection();

        $sql = "DELETE FROM image WHERE user_id = :user_id";
    
        $statement = $conn->prepare($sql);
        $user_id = $_SESSION["userId"];

        $statement->bindValue(":user_id", $user_id);
        $statement->execute();

        return $this;
        
    }
   
}
