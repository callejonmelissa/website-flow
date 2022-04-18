<?php

require_once './HighWay.php';

final class MotorWay extends Highway 
{
    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
       if  (is_a($vehicle, 'Bike') || is_a($vehicle, 'Stakeboard')) {
           $this->getCurrentVehicles[] = $vehicle;
           // is_a — Vérifie si l'objet est une instance d'une classe donnée ou a cette classe parmi ses parents
       }
    }
}