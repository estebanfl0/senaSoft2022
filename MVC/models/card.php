<?php 
class card{
    private $id;
    private $name;
    private $description;
    private $strength;
    private $speed;
    private $defense;
    private $brain;
    private $maxPower;
    private $image;
    private $db;
// se genera el constructor de la clase
    public function __construct($id,$name,$description,$strength,$speed,$defense,$brain,$image){
        
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->strength = $strength;
        $this->speed = $speed;
        $this->defense = $defense;
        $this->brain = $brain;
        $this->maxPower = round(($strength+$speed+$defense+$brain)/4); 
        $this->db = dataBase::conexion();
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $this->db->real_escape_string($id);
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $this->db->real_escape_string($name);
    }
    
    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $this->db->real_escape_string($description);
    }
    
    public function getStrength()
    {
        return $this->strength;
    }

    public function setStrength($strength)
    {
        $this->strength = $this->db->real_escape_string($strength);
    }
    
    public function getSpeed()
    {
        return $this->speed;
    }
    
    public function setSpeed($speed)
    {
        $this->speed = $this->db->real_escape_string($speed);
    }
 
    public function getDefense()
    {
        return $this->defense;
    }
    
    public function setDefense($defense)
    {
        $this->defense = $this->db->real_escape_string($defense);
    }

    public function getBrain()
    {
        return $this->brain;
    }

    public function setBrain($brain)
    {
        $this->brain = $this->db->real_escape_string($brain);
    }
    
    public function getMaxPower()
    {
        return $this->maxPower;
    }
    
    public function setMaxPower($maxPower)
    {
        $this->maxPower = $this->db->real_escape_string($maxPower);
    }
    
    public function getImage()
    {
        return $this->image;
    }
    
    public function setImage($image)
    {
        $this->image = $image;
    }
    // se genera el metodo para guardar una carta.
    public function save(){
        $id = $this->getId();
        $name = $this->getName();
        $description = $this->getDescription();
        $strength = $this->getStrength();
        $speed = $this->getSpeed();
        $defense = $this->getDefense();
        $brain = $this->getBrain();
        $maxPower = $this->getBrain();
        $image = ($this->getImage())? $this->getImage():null;

        $sql = "INSERT INTO cards VALUES ('$id','$name','$description',$strength,$speed,$defense,$brain,$maxPower,'$image')";        
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result=true;
        }
        return $result;
    }
} // end class