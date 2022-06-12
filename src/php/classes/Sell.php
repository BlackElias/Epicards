<?php
include_once(__DIR__ . "/Db.php");
use src\php\classes\db\Db;
class Sell
{
    private $CardId;
    private $name;
    private $price;
    private $image;
    private $userId;
    private $username;
    private $id;
    


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
     * Get the value of CardId
     */ 
    public function getCardId()
    {
        return $this->CardId;
    }

    /**
     * Set the value of CardId
     *
     * @return  self
     */ 
    public function setCardId($CardId)
    {
        $this->CardId = $CardId;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

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
    function save()
    {
        $conn = Db::getConnection();

        $sql = "INSERT INTO sell (CardId, name, price, image, user_id, username) VALUES (:CardId, :name, :price, :image, :userId, :username)";
        $statement = $conn->prepare($sql);
        $CardId = $this->getCardId();
        $userId = $this->getUserId();
        $name = $this->getName();
        $username = $this->getUsername();
        $price = $this->getPrice();
        $image = $this->getImage();
        $statement->bindValue(":username", $username);
        $statement->bindValue(":userId", $userId);
        $statement->bindValue(":CardId", $CardId);
        $statement->bindValue(":name", $name);
        $statement->bindValue(":price", $price);
        $statement->bindValue(":image", $image);
        
        $statement->execute();
    }
    public static function getFeedSell()
    {
        $conn = Db::getConnection();

        $sql = "SELECT * FROM sell WHERE CardId = :CardId ";
        $statement = $conn->prepare($sql);
        $Card = $_SESSION["cardId"];

        $statement->bindValue(":CardId", $Card);
        $statement->execute();
        $collection = $statement->fetchAll();
        return $collection;
    }
    public function Delete()
    {
        $conn = Db::getConnection();

        $sql = "DELETE FROM sell WHERE id = :id";
        $statement = $conn->prepare($sql);

        $id = $this->getId();
        $statement->bindValue(":id", $id);
        $statement->execute();

        return $this;
        
    }
  

  
}