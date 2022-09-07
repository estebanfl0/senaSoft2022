<?php
require_once('models/deckCard.php');
class deckCardscontroller{
    public function saveDeck($numplayers){
            $numplayers = $numplayers;
            $numCardsDeck = utils::maxcardDecks($numplayers);     
            $cardcontrol = new cardscontroller();
            $cards=$cardcontrol->getAllCards();
            $id= $_GET['id'];

            $array = utils::generateDeck($numCardsDeck,$cards);

            // se guarda el mazo de cartas para el juagdor
            $deck = new deckCard();
            $result = $deck->save($array);
            if($result){
                header("location: index.php");
            }else {
                echo "error en la ejecucion sql";
            }

    }

    public function getAll(){
        $decks = new deckCard();
        $decksplay = $decks->getAll();
        var_dump($decksplay);
        return $decksplay;
    }

    public function getAllRand(){
        
    }
}//end class