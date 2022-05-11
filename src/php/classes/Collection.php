<?php
include_once(__DIR__ . "/Db.php");
class Collection
{
    private $userId;
    private $collectionName;
    private $collectionPrivate;
    private $collectionType;







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











}
