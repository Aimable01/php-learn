<?php

class Car
{
    # properties or fields
    private $color;
    private $brand;
    private $vehicleType = "car";

    # constructors
    public function __construct($brand, $color = "black")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    # method
    public function getCarInfo(){
        return "Brand: " . $this->brand . " Color: " . $this->color;
    }
}

$car01 = new Car("Volvo", "green");
$car02 = new Car("BMW");

echo $car01->getCarInfo();