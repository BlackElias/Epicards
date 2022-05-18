<?php
include_once(__DIR__ . "/Db.php");
class Cards
{
    private $collectionId;
    private $card_name;
    private $card_price;
    private $card_image;
    






    /**
     * Get the value of collectionId
     */ 
    public function getCollectionId()
    {
        return $this->collectionId;
    }

    /**
     * Set the value of collectionId
     *
     * @return  self
     */ 
    public function setCollectionId($collectionId)
    {
        $this->collectionId = $collectionId;

        return $this;
    }
  /**
     * Get the value of card_name
     */ 
    public function getCard_name()
    {
        return $this->card_name;
    }

    /**
     * Set the value of card_name
     *
     * @return  self
     */ 
    public function setCard_name($card_name)
    {
        $this->card_name = $card_name;

        return $this;
    }
    /**
     * Get the value of card
     */ 
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @return  self
     */ 

     
    /**
     * Get the value of card_price
     */ 
    public function getCard_price()
    {
        return $this->card_price;
    }

    /**
     * Set the value of card_price
     *
     * @return  self
     */ 
    public function setCard_price($card_price)
    {
        $this->card_price = $card_price;

        return $this;
    }

    /**
     * Get the value of card_image
     */ 
    public function getCard_image()
    {
        return $this->card_image;
    }

    /**
     * Set the value of card_image
     *
     * @return  self
     */ 
    public function setCard_image($card_image)
    {
        $this->card_image = $card_image;

        return $this;
    }
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }
    public function saveCards()
    {
        $conn = Db::getConnection();

        $sql = "INSERT INTO cards (collection_id, card_name, card_price, card_image) VALUES (:collection_id, :card_name, :card_price, :card_image)";
        
        $statement = $conn->prepare($sql);
       // $currentUserId =$this->getUserId();
        $collection_id = $this->getCollectionId();
        $cardName = $this->getCard_name();
        $cardPrice = $this->getCard_price();
        $cardImage = $this->getCard_image();
        
        $statement->bindValue(":collection_id", $collection_id);
        $statement->bindValue(":card_name", $cardName);
        $statement->bindValue(":card_price", $cardPrice);
        $statement->bindValue(":card_image", $cardImage);
       
        $statement->execute();
    }
    public static function getFeedCards()
    {
        $conn = Db::getConnection();

        $sql = "SELECT * FROM cards ";
        $statement = $conn->prepare($sql);
        $collection_id = "";

        $statement->bindValue(":collection_id", $collection_id);
        $statement->execute();
        $collection = $statement->fetchAll();
        return $collection;
    }
   




  

}