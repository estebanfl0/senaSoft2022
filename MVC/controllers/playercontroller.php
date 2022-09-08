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
    public function templateCard() {
        require_once('views/player/card.php');
    }



    // Metodos para generar mazos y jugadores 
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
        $players = 0;
        // for ($i=0; $i < $_GET['numPlayers']; $i++) {
        //     $this->createPlayer();
        // }
    } 
    public function tests(){
        // metodo para realizar pruebas;
    }
}   