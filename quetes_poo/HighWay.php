<?php

require_once './Vehicle.php';

abstract class HighWay 
{
    //Propriétés
    private array $currentVehicles = [];
    private int $nbLane;
    private int $maxSpeed;

    //Constructeur
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    //Ajouter à la classe HighWay une méthode abstraite addVehicle() prenant en paramètre un objet de type Vehicle.
    abstract public function addVehicle(Vehicle $vehicle);


    //GETTERS SETTERS
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles[] = $currentVehicles;

        return $this;
    }



    public function getNbLane()
    {
        return $this->nbLane;
    }

    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    


    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

}