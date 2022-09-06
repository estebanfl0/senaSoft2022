<?php 
require_once('config/database.php');
class utils{ 
    public static function returnAllCards(){
        $db = dataBase::conexion();
        $cardsquery = $db->query("SELECT * FROM cards;");
        $cards = array();
        while($card= mysqli_fetch_object($cardsquery)){
            array_push($cards,$card);
        }
        return $cards;
    }
}