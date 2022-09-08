<?php 
require_once('models/player.php');
class playercontroller{

    public function createDecksgame(){
        if(isset($_GET['numPlayers'])){
            $numPj = $_GET['numPlayers'];
            utils::generateAllDecks($_GET['numPlayers']);
            $pla = array("Player1","Player2");
            $players = json_encode($pla);
            header("location:".baseController."controller=player&action=createAllPlayers&name=$players&numPlayers=$numPj");
        }
    }
    public function createPlayer($id, $name){
            $deckCards = new deckCardscontroller();
            $deckCards = $deckCards->getAllId();
            utils::alterSessionDecks($deckCards);
            $playermodel = new player();
            $playermodel->setName($name);
            $result = $playermodel->createPlayer($id);

    }

    public function createAllPlayers(){
        $players = json_decode($_GET['name']);

        for ($i=1; $i <= $_GET['numPlayers']; $i++) {
            $this->createPlayer($i, $players[$i]);
        }
        echo "Lossers.com";
    } 
    public function index(){
        echo "cry";
        // metodo para realizar pruebas;
        $decks = utils::generateAllDecks(5);
        utils::alterSessionDecks($decks);
        $array = $_SESSION['idDeck'];
        echo $array[0][0];
    }
    public function cry(){
        echo "cry <hr>";
    }
}   