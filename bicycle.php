<?php


class bicycle 
{

    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;


    public function getCurrentSpeed(): int 
    {
        return $this -> currentSpeed;
    
    }

    public function getNbSeats(): int 
    {
        return $this -> nbSeats;
    }

    public function getNbWheels(): int 
    { 
        return $this -> nbWheels;

    }

    public function forward(): string 
    { 
        $this->currentSpeed = 15;

        return " Go !";
    }

    public function brake(): string 
    {
        $sentence= "";
    
        while ($this->currentSpeed > 0 )
        {
            $this->currentSpeed--;
            $sentence .= " Brake !!! ";
        }
    $sentence .=" I'm stopped !";   
    return $sentence;     

    }

    

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color): void 
    {
        $this->color = $color;

        
    }

    /**
     * Set the value of currentSpeed
     *
     * @return  self
     */ 
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }

        
    }

    /**
     * Set the value of nbSeats
     *
     * @return  self
     */ 
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        
    }

    /**
     * Set the value of nbWheels
     *
     * @return  self
     */ 
    public function setNbWheels($nbWheels): void
    {
        $this->nbWheels = $nbWheels;

        
    }
} //fin de la classe
?> 