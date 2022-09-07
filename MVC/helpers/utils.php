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

    public static function maxcardDecks($numplayers){
        $result = 0;
        $res = 32/$numplayers;
        $result = floor($res);
        return $result;
    }
    public static function generateDeck($numCardsDeck,$cards){
        $count = 0;
        $arrayplayer = array();
        while($count<$numCardsDeck) {
            $randnum = rand(0,31);
            if(isset($cards[$randnum])){
                array_push($arrayplayer,$cards[$randnum]);
                unset($cards[$randnum]);
                $count++;
            };
        };
        return $arrayplayer;
    }
}// end class