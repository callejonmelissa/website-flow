<?php 
require_once 'Vehicle.php';

class Car extends Vehicle
{
    //Constantes
    public const ALLOWED_ENERGIES = [
    'gasoil',
    'electricity',
    ];

    //Propriétés
    protected string $energy;
    protected int $energyLevel; // est-ce qu'il faut mettre 50 ici ou dans l'index?

    //Méthode - Constructeur
    public function __construct(string $color, int $nbSeats, string $energy, int $nbWeels, int $energyLevel)
    {
        parent::__construct($color, $nbSeats, $nbWeels);
        $this->setEnergy = $energy;
        $this->setEnergyLevel = $energyLevel;
    }

    //GETTERS SETTERS
    public function getEnergy(): string
    {
        return $this->energy;
    }


    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void 
    {
        $this->energyLevel = $energyLevel;
    }


}