<?php
include_once(__DIR__ . "/Db.php");
class Collection
{
    private $userId;
    private $collectionName;
    private $collectionPrivate;
    private $collectionType;
    private $collectonId;






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
     * Get the value of collectionName
     */ 
    public function getCollectionName()
    {
        return $this->collectionName;
    }

    /**
     * Set the value of collectionName
     *
     * @return  self
     */ 
    public function setCollectionName($collectionName)
    {
        $this->collectionName = $collectionName;

        return $this;
    }

    /**
     * Get the value of collectionPrivate
     */ 
    public function getCollectionPrivate()
    {
        return $this->collectionPrivate;
    }

    /**
     * Set the value of collectionPrivate
     *
     * @return  self
     */ 
    public function setCollectionPrivate($collectionPrivate)
    {
        $this->collectionPrivate = $collectionPrivate;

        return $this;
    }

    /**
     * Get the value of collectionType
     */ 
    public function getCollectionType()
    {
        return $this->collectionType;
    }

    /**
     * Set the value of collectionType
     *
     * @return  self
     */ 
 /**
     * Get the value of collectonId
     */ 
    public function getCollectonId()
    {
        return $this->collectonId;
    }

    /**
     * Set the value of collectonId
     *
     * @return  self
     */ 
    public function setCollectonId($collectonId)
    {
        $this->collectonId = $collectonId;

        return $this;
    }
     
    public function setCollectionType($collectionType)
    {
        $this->collectionType = $collectionType;

        return $this;
    }
    public function saveCollection($currentUserId)
    {
        $conn = Db::getConnection();

        $sql = "INSERT INTO collection (user_id, collection_private, collection_name, collection_type) VALUES (:user_id, :collection_private, :collection_name, :collection_type )";
        
        $statement = $conn->prepare($sql);
       // $currentUserId =$this->getUserId();
        $collection_private = $this->getCollectionPrivate();
        $collection_name = $this->getCollectionName();
        $collection_type = $this->getCollectionType();
        
        $statement->bindValue(":user_id", $currentUserId);
        $statement->bindValue(":collection_private", $collection_private);
        $statement->bindValue(":collection_name", $collection_name);
        $statement->bindValue(":collection_type", $collection_type);
        $statement->execute();
    }
    public static function getFeedCollections()
    {
        $conn = Db::getConnection();

        $sql = "SELECT *, collection_id as collectionId FROM collection JOIN users ON users.id=collection.user_id WHERE  user_id = :user_id ";
        $statement = $conn->prepare($sql);
        $user_id = $_SESSION["userId"];

        $statement->bindValue(":user_id", $user_id);
        $statement->execute();
        $collection = $statement->fetchAll();
        return $collection;
    }
    public static function getCollectionId()
    {
        $conn = Db::getConnection();

        $sql = "SELECT *, collection_id as collectionId FROM collection  ";
        $statement = $conn->prepare($sql);
       
        $statement->execute();
        $collection = $statement->fetchAll();
        return $collection;
    }
    public static function getCards(){
        $conn = Db::getConnection();
        $sql = " SELECT *  FROM collection JOIN users ON users.id=collection.user_id JOIN cards where cards.collection_id=collection.collection_id";
        $statement = $conn->prepare($sql);
       
        $statement->execute();
        $collection = $statement->fetchAll();
        return $collection;
    }
    public function getCollectionInfo($colId)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM collection WHERE collection_id = :userId");
        $statement->bindValue(":userId", $colId);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if (empty($user)) {
            throw new Exception(" No user is logged in.");
        }
        return $user;
    }

    public function updateInfo($currentCollectonId)
    {

        $conn = Db::getConnection();
        $statement = $conn->prepare("UPDATE collection SET collection_name = :collection_name, collection_private = :collection_private WHERE collection_id = :currentcollectionId");
        $statement->bindValue(":currentcollectionId", $currentCollectonId);

        $collection_name = $this->getCollectionName();
        $collection_private = $this->getCollectionPrivate();
      

        $statement->bindValue(":collection_name", $collection_name);
        $statement->bindValue(":collection_private", $collection_private);
   

        $user = $statement->execute();

        return $user;
    }
    public function DeleteCollection()
    {
        $conn = Db::getConnection();

        $sql = "DELETE FROM collection WHERE collection_id = :id";
        $statement = $conn->prepare($sql);

        $id = $this->getCollectionId();
        $statement->bindValue(":id", $id);
        $statement->execute();

        return $this;
        
    }
    public function DeleteCollection2()
    {
        $conn = Db::getConnection();

        $sql = "DELETE FROM collection WHERE collection_id = :id";
        $statement = $conn->prepare($sql);

        $id = $this->getCollectonId();
        $statement->bindValue(":id", $id);
        $statement->execute();

        return $this;
        
    }











   
}
