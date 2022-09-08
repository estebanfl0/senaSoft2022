<?php 
require_once('models/player.php');
class playercontroller{

    public function createDecksgame(){
        if(isset($_GET['numPlayers'])){
            $numPj = $_GET['numPlayers'];
            utils::generateAllDecks($_GET['numPlayers']);
            $players = array(1,2);;
            header("location:".baseController."controller=player&action=createAllPlayers&name={$players}&numPlayers=$numPj");
        }
        
    }
    public function createPlayer($name){
            $deckCards = new deckCardscontroller();
            $deckCards = $deckCards->getAllId();
            utils::alterSessionDecks($deckCards);
            $playermodel = new player();
            $playermodel->setName($name);
            $result = $playermodel->createPlayer();

    }

    public function createAllPlayers(){
        $players = 
        for ($i=0; $i < $_GET['numPlayers']; $i++) {
            $this->createPlayer()
        }
    } 
    public function tests(){
        // metodo para realizar pruebas;
    }
}   