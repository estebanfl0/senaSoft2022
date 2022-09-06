<?php
require_once('models/deckCard');
class deckCardscontroller{
    public function saveDeck(){
        $carcontrol = new cardscontroller();
        $cards=$carcontrol->getAllCards();
        $deckCard = array();
        for ($i=0; $i < 8; $i++) {
            $randnum = rand(1,32);
            
        }
        // se guarda 
    }
}