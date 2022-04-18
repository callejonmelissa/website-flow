<?php

    require_once './Vehicle.php';
    require_once './Car.php';
    require_once './Bicycle.php';
    require_once './Truck.php';
    require_once './HighWay.php';
    require_once './MotorWay.php';
    require_once './PedestrianWay.php';
    require_once './ResidentialWay.php';


    $car = new Car("red", 2, "gasoil", 4, 50);
    $bicycle = new Bicycle("red", 1, 2);
    $truck = new Truck('black', 2, 4, 'gasoil', 500); //Couleurs, nombre de siège, énergie, capacité stockage


    echo $car->forward();
    echo $car->brake();
    
    echo $bicycle->forward();
    echo $bicycle->brake();

    echo $truck->stock();
    echo $truck->setStockLoaded(800);

    var_dump(Truck::ALLOWED_ENERGIES);