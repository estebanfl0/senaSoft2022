<?php 
require_once('models/player.php');
class playercontroller{

    public function createDecksgame(){
        if(isset($_GET['numPlayers'])){
            $numPj = $_GET['numPlayers'];
            utils::generateAllDecks($_GET['numPlayers']);
            header("location:".baseController."controller=player&action=createAllPlayers&name=player&numPlayers=$numPj");
        }
        
    }
    public function createPlayer(){
        if(isset($_GET['name']) && isset($_GET['numPlayers'])){
            $name = $_GET['name'];
            $numPj = $_GET['numPlayers'];
            $deckCards = new deckCardscontroller();
            $deckCards = $deckCards->getAllId();
            utils::alterSessionDecks($deckCards);
            $playermodel = new player();
            $playermodel->setName($name);
            $result = $playermodel->createPlayer($numPj);

            if($result){
                echo "conseguido";
                var_dump($_SESSION['idDeck']);
            }

        }
    }
    public function createAllPlayers(){

    } 
    public function tests(){
        // metodo para realizar pruebas;
    }
}   