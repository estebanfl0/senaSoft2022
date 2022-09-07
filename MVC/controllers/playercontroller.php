<?php 
require_once('models/player.php');
class playercontroller{
    public function createPlayer(){
        if(isset($_GET['name']) && isset($_GET['numPlayers'])){
            $name = $_GET['name'];
            $numplayers = $_GET['numPlayers'];
            // desde aqui se maneja el controlador de los mazos
            $ctrDeckcards = new deckCardscontroller();
            $ctrDeckcards->saveDeck($numplayers);
            

            // desde aqui se maneja el controlador de jugador
            $playermodel = new player();
            $playermodel->setName($name);
            $playermodel->createPlayer();

        }
    }
}