<?php

require_once './HighWay.php';

final class MotorWay extends Highway 
{
    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
           $this->getCurrentVehicles[] = $vehicle;
    }
}