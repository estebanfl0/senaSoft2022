<?php
// se crea el modelo para los mazos de cartas
class deckCard{
    // se generan los atributos del modelo
    private $id;
    private $deck;
    private $db;

    public function __construct(){
        $this->db = dataBase::conexion();
    }

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
        $deck = json_encode($deck);
        $sql = "INSERT INTO deckcards VALUES (null,'$deck')";        
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result=true;
        }
        return $result;
    }

    public function getOneRand($id){
        $sql = "SELECT rand(id) FROM deckcards";        
        $answer = $this->db->query($sql);
        $result = mysqli_fetch_object($answer);
        return $result;
    }
    
    public function getAll(){
        $sql = "SELECT * FROM deckcards";
        $answer = $this->db->query($sql);
        $result = array();
        while($res = mysqli_fetch_object($answer)){
            array_push($result,$res);
        }
        return $result;
    }
}//end class