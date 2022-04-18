<?php

class Vehicle 
{
    //propriétés
    protected string $color;
    protected int $currentSpeed;
    protected int  $nbSeats;
    protected int $nbWheels;

    //Constructeur
    public function __construct(string $color, int $nbSeats, int $nbWheels)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
    }

    // public function __construct(private string $color, private int $currentSpeed, private int $nbSeats, private int $nbWheels, private string $energy, private int $energyLevel){};


    //Méthodes (fonction d'un objet)
    public function start(): string
    {
        $this->currentSpeed = 0; 
        $this->energyLevel -= 5;
        
        return $this->energyLevel;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
    
        while ($this->currentSpeed > 0)
        {
            $this->currentSpeed--;
            $sentence .= "Brake !!!"; 
        }
   
        $sentence .= "I'm stopped !";
   
        return $sentence;
    }

    // Getters
    public function getColor():string {return $this->color;}
    public function getCurrentSpeed():string {return $this->currentSpeed;}
    public function getNbSeats():string {return $this->nbSeats;}
    public function getNbWheels():string {return $this->nbWheels;}
    public function getEnergyLevel():int {return $this->energyLevel;}

    //Setters
    public function setColor(string $color):void {$this->color = $color;}
    public function setCurrentSpeed(int $currentSpeed):void {$this->currentSpeed = $currentSpeed;}
    public function setNbSeats(int $nbSeats):void {$this->nbSeats = $nbSeats;}
    public function setNbWheels(int $nbWheels):void {$this->nbWheels = $nbWheels;}
    public function setEnergyLevel(int $energyLevel):void {$this->energyLevel = $energyLevel;}
}