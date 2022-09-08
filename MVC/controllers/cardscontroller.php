<?php 
require_once('models/card.php');
require_once('helpers/utils.php');
class cardscontroller{
    public function seedCards(){
        // Generar todas las cartas
        if(isset($_GET['seed'])){
            require_once('dataBase/insertcards.php');
            $create = seedCards();
            if($create){
                echo "se logro";
                // header("location:".baseController."controller=player&action=index");
            }
        }
    }
    // metodo para regresar todas las cartas
    public function getAllCards(){  
        $cards = utils::returnAllCards();
        return $cards;
    }
}   