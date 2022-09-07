<?php 
class player{
    private $id;
    private $name;
    private $deck_id;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDeck_id()
    {
        return $this->deck_id;
    }

    public function setDeck_id($deck_id)
    {
        $this->deck_id = $deck_id;
    }

    public function createPlayer($decks){
        $db = dataBase::conexion();
        $name = $this->getName();
        
        // utils::alterSessionDecks($decks);
        // $this->setDeck_id($_SESSION['idDeck'][0]->id);
        $deck_id = $this->getDeck_id();
        // $sqlvalidate = "SELECT * FROM players WHERE deck_id= {$this->getDeck_id()}";
        // $validate = $db->query($sqlvalidate);

        // if(empty($validate)){}

        $sql = "INSERT INTO players VALUES (null,'$name',$deck_id)";
        $save = $db->query($sql);
        $result = false;
        dataBase::close($db);
        if($save){
            $result=true;
        }
        // }else {
        //     switch($_SESSION['idDeck']){
        //         case 1:
        //             utils::alterSessionDecks($decks,1);
        //             break;
        //         case 2:
        //             utils::alterSessionDecks($decks,2);
        //             break;
        //         case 3:
        //             utils::alterSessionDecks($decks,3);
        //             break;
        //         case 4:
        //             utils::alterSessionDecks($decks,4);
        //             break;
        //         case 5:
        //             utils::alterSessionDecks($decks,5);
        //             break;
        //         case 6:
        //             utils::alterSessionDecks($decks,6);
        //             break;
        //     }
        return $result;    
        
    }
} //end class