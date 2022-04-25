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
    protected int $energyLevel;
    private bool $hasParkBrake = false;

    //Méthode - Constructeur
    public function __construct(string $color, int $nbSeats, string $energy, int $nbWeels, int $energyLevel)
    {
        parent::__construct($color, $nbSeats, $nbWeels);
        $this->setEnergy = $energy;
        $this->setEnergyLevel = $energyLevel;
    }

    public function start(): string
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('Warning');
        } else {
            $this->currentSpeed = 15;
            $this->energyLevel -= 5;
            return "Go !";
        }
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


    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }


    public function setHasParkBrake(bool $true): void
    {
        $this->hasParkBrake = $true;
    }
}
