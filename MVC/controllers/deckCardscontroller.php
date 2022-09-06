<?php
require_once('models/deckCard');
class deckCardscontroller{
    public function saveDeck(){
        $carcontrol = new cardscontroller();
        $cards=$carcontrol->getAllCards();
        $deckCard = array();
        $count = 0;
        while($count<16) {
            $randnum = rand(1,32);
            if($cards[$randnum]){
                array_push($deckCard,$cards[$randnum]);
                unset($cards[$randnum]);
            };
        }
        $deckCard01= array_chunk($deckCard,)
        // se guarda 
    }
}