<?php
namespace src\php\classes\Trade;
use src\php\classes\Cards\Cards;
use src\php\classes\db\Db;

class Trade
{
    private int $userId;
    private string $name;
    private string $type;
    private int $Id;
    private array $cards;
 
    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId(int $userId)
    {
        $this->userId = $userId;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
     
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function addCard(Cards $card){
        if(empty($this->cards)){
            $cards = array($card);
        }else{
            array_push($this->cards, $card);
        }
        Trade::addCardByTradeId($card->getId, $this->Id);
    }

    public function removeCard(Cards $card){
        $idx = array_search($card, $this->cards, true);
        if($idx){
            \array_splice($array, 1, $idx);
            $card->DeleteCards();
        }
    }

    public function getCards(){
        return $this->cards;
    }

    public function countCards(){
        return count($this->cards);
    }

    public function priceCards(){
        return array_reduce($this->cards, function($carry, $card)
        {
            return $carry + $card->getCard_price();
        });
    }

    public function delete(){
       Trade::deleteById($this->getId());
    }

    public function save(){
        $conn = Db::getConnection();

        $sql = "INSERT INTO trade (user_id, name, type) VALUES (:user_id, :name, :type)";
        
        $statement = $conn->prepare($sql);
       
        $statement->bindValue(":user_id", $_SESSION["user_id"]);
        $statement->bindValue(":name", $this->name);
        $statement->bindValue(":type", $this->type);
        $statement->execute();

    }

    public static function deleteById(int $id){
        $conn = Db::getConnection();

        $sql = "DELETE FROM trade WHERE id = :id";
        $statement = $conn->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
    }

    public static function getTradeById(int $id){
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM trade WHERE id = :id ");
        $statement->bindValue(":id", $id);
        
        $result = $statement->execute();
        $result = $statement->fetchAll();

        return $result;
    }

    public static function addCardByTradeId(int $cardId, int $tradeId){
        //voeg toe aan de database
        $conn = Db::getConnection();
        $statement = $conn->prepare("UPDATE cards SET trade_id = :trade_id WHERE cards_id = :cards_id");
        $statement->bindValue(":trade_id", $tradeId);
        $statement->bindValue(":cards_id", $cardId);

        $statement->execute();
    }
}