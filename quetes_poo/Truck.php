<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    //Constantes
    public const ALLOWED_ENERGIES = [
        'gasoil',
        'electricity',
    ];

    //Propriétés
    private int $stockCapacity;
    private int $stockLoaded = 0;
    private string $energy;

    //Méthode - Constructeur
    public function __construct(string $color, int $nbSeats, int $nbWheels, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats, $nbWheels);
        $this->energy = $energy;
        $this->stockCapacity = $stockCapacity;
    }

    //Méthodes
    //retourne in filling quand il n'est pas plein et full quand il est plein
    public function stock(): string
    {
        if ($this->getStockLoaded() < $this->getStockCapacity())
        {
            return PHP_EOL .  "in filling";
        } else {
            return PHP_EOL . "Full";
        }
    }

    /**
     * Get the value of stockCapacity
     */ 
    public function getStockCapacity()
    {
        return $this->stockCapacity;
    }

    /**
     * Set the value of stockCapacity
     *
     * @return  self
     */ 
    public function setStockCapacity(int $stockCapacity)
    {
        $this->stockCapacity = $stockCapacity;

        return $this;
    }

    

    /**
     * Get the value of stockLoaded
     */ 
    public function getStockLoaded()
    {
        return $this->stockLoaded;
    }

    /**
     * Set the value of stockLoaded
     *
     * @return  self
     */ 
    public function setStockLoaded(int $stockLoaded)
    {
        if ($stockLoaded > $this->getStockCapacity())
        {
            return "Pas assez de capacité de stockage";
        } else {
            $this->stockLoaded = $stockLoaded;
        }

        return $this;
    }
}
