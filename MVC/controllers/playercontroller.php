<?php 
require_once('models/player.php');
class playercontroller{

    public function createDecksgame(){
        if(isset($_GET['numPlayers'])){
            utils::generateAllDecks($_GET['numPlayers']);
            // header("location:".baseController."controller=player&action=createPlayer&name=player");
        }
        
    }
    public function createPlayer(){
        if(isset($_GET['name'])){
            $name = $_GET['name'];
            $deckCards = new deckCard();
            $deckCards = $deckCards->getAll();
            $playermodel = new player();
            $playermodel->setName($name);
            $playermodel->setDeck_id($deckCards);
            $result = $playermodel->createPlayer($deckCards);

            if($result){
                echo "conseguido";
            }

        }
    }
}