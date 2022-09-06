<?php 
require_once('config/database.php');
class utils{ 
    public static function returnAllCards(){
        $db = dataBase::conexion();
        $cardsquery = $db->query("SELECT * FROM cards ORDER BY id;");
        $cards= mysqli_fetch_array($cardsquery);
        return $cards;
    }
}