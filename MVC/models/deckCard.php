<?php
// se crea el modelo para los mazos de cartas
class deckCard{
    // se generan los atributos del modelo
    private $id;
    private $deck;

    public function __construct(){
        
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
}