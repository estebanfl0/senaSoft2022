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

    public function createPlayer(){
        $name = $this->getName();
        $deck_id = $this->getDeck_id();
        $sql = "INSERT INTO players VALUES (null,'$name',$deck_id)";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result=true;
        }
        return $result;    
    }
} //end class