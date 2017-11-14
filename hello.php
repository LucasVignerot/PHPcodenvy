<?php

class Movie
{
    
    private $name = null;
    private $description = "une description";
    private $duration = 120;
    
    public function __construct($name = "", $description= "", $duration = "")
    {
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
        public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description = "")
    {
        $this->description = $description;
    }
    
        public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration($duration = "")
    {
        $this->duration = $duration;
    }
}

$movie = new Movie("Mon film","C'est bien",123);

echo $movie->getName()."</br>".$movie->getDescription()."</br>".$movie->getDuration();