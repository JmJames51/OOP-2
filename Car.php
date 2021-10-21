<?php

class Car 
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 5;

    private int $nbWheels = 4;

    private string $energy; 
    

    public function __construct(string $color, int $nbWheels, string $energy)
    {
    $this->color =$color;
    $this->nbWheels=$nbWheels;
    $this->energy=$energy;

    }

    public function forward(): string
    {
        $this->currentSpeed = 90;
    
        return "Let's go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function start(): string
{
    $this->currentSpeed = 0;
    
    return ""; 
}

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * Set the value of currentSpeed
     *
     * @return  self
     */ 
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }

    /**
     * Get the value of nbSeats
     */ 
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Set the value of nbSeats
     *
     * @return  self
     */ 
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get the value of nbWheels
     */ 
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * Set the value of nbWheels
     *
     * @return  self
     */ 
    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }

    /**
     * Get the value of energy
     */ 
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Set the value of energy
     *
     * @return  self
     */ 
    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }
}

?>