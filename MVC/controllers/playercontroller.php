<?php 
require_once('models/player.php');
class playercontroller{
    // Metodos para requerrir vistas
    public function index() {
        require_once('views/player/index.php');
    }
    public function cardTemplatee() {
        require_once('template/cardT.php');
    }
    public function placeGame() {
        require_once('views/placegame/lacegame.php');
    }



    // Metodos para generar mazos y jugadores 
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