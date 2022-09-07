<?php
require_once('models/deckCard.php');
class deckCardscontroller{
    public function saveDeck(){
        if($_POST){
            $numplayers = $_POST['numPLayers'];
            $numCards = 32;
            switch($numplayers){
                case 2:
                    $numCardsDeck = $numCards/$numplayers;
                    break;
                case 3:
                    $numCardsDeck = $numCards/$numplayers;
                    break;
                case 4:
                    $numCardsDeck = $numCards/$numplayers;
                    break;
                case 5:
                    $numCardsDeck = $numCards/$numplayers;
                    break;
                case 6:
                    $numCardsDeck = $numCards/$numplayers;
                    break;
                case 7:
                    $numCardsDeck = $numCards/$numplayers;
                    break;
        
            }
            $carcontrol = new cardscontroller();
            $cards=$carcontrol->getAllCards();
            $deckCards = array();
            $count = 0;
            while($count<$numCardsDeck) {
                $randnum = rand(0,31);
                if(isset($cards[$randnum])){
                    array_push($deckCards,$cards[$randnum]);
                    unset($cards[$randnum]);
                    $count++;
                };
            };
            $deckCard = array_chunk($deckCards,(sizeof($deckCards)/$numplayers),true);
            var_dump($deckCard);
            die();
            $deckCard01 = $deckCard[0];
            $deckCard02 = $deckCard[1];
            
            
            // // se guarda 
            // $deck = new deckCard();
            // $result = $deck->save($deckCard01);
            // $deck->save($deckCard02);
            // if($result){
            //     header("location: index.php");
            // }else {
            //     echo "error en la ejecucion sql";
            // }

        }

    }

    public function getAll(){
        $decks = new deckCard();
        $decksplay = $decks->getAll();
        var_dump($decksplay);
        return $decksplay;
    }
}//end class