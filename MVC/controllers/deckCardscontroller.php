<?php
require_once('models/deckCard.php');
class deckCardscontroller{
    public function saveDeck($numplayers){
            $numplayers = $numplayers;
            $numCardsDeck = utils::maxcardDecks($numplayers);     
            $cardcontrol = new cardscontroller();
            $cards=$cardcontrol->getAllCards();

            $array = utils::generateDeck($numCardsDeck,$cards);

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
        return $decksplay;
    }
    public function getAllId(){
        $decks = new deckCard();
        $decksplay = $decks->getAllId();
        var_dump($decksplay);
    }

}//end class