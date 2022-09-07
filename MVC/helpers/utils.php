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
        $res = 32/intval($numplayers);
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

    // public static function getAllRand(){
    //     $db = dataBase::conexion();
    //     $sql = "SELECT id FROM deckcards ORDER BY RAND()";        
    //     $answer = $db->query($sql);
    //     $result = array();
    //     while($res = mysqli_fetch_object($answer)){
    //         array_push($result, $res);
    //     }
    //     return $result;
    // }

    // public static function transformObj($deck){
    //     $array = get_object_vars($deck);
    //     return $array;
    // }

    public static function alterSessionDecks($deckArray){
        $_SESSION['idDeck'] = $deckArray; 
    }
    public static function generateAllDecks($numPlayers){
        for ($i=0; $i < $numPlayers; $i++) { 
            $ctrDeckcards = new deckCardscontroller();
            $ctrDeckcards->saveDeck($numPlayers);
        }
    }
}// end class