<?php
// se crea el modelo para los mazos de cartas
class deckCard{
    // se generan los atributos del modelo
    private $id;
    private $deck;

    // geter and setter
    public function getId(){
        return $this->id;
    }
 
    public function setId($id){
        $this->id = $id;
    }

    public function getDeck(){
        return $this->deck;
    }

    public function setDeck($deck){
        $this->deck = $deck;
    }
    public function save($deck){
        $db = dataBase::conexion();
        $deck = json_encode($deck);
        $sql = "INSERT INTO deckcards VALUES (null,'$deck')";        
        $save = $db->query($sql);
        dataBase::close($db);
        $result = false;
        if($save){
            $result=true;
        }
        return $result;
    }
    
    public function getAll(){
        $db = dataBase::conexion();
        $sql = "SELECT * FROM deckcards";
        $answer = $db->query($sql);
        $result = array();
        while($res = mysqli_fetch_object($answer)){
            array_push($result,$res);
        }
        dataBase::close($db);
        return $result;
    }
}//end class