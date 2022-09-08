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

    public function createPlayer($numPj){
        $db = dataBase::conexion();
        $name = $this->getName();
        $decks = $_SESSION['idDeck'];
        $this->setDeck_id($decks[0][0]);
        $deck_id = $this->getDeck_id();

        $sql = "INSERT INTO players VALUES (null,'$name',$deck_id)";
        $save = $db->query($sql);
        $result = false;
        if($save){
            $result=true;
        }
        dataBase::close($db);
        unset($decks[0]);
        utils::alterSessionDecks($decks);
        return $result;    
    }
} //end class