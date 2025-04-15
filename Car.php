<?php

class Car {
    // Properties / Fields
    private $brand;
    private $color;
    private $vehicleType = "Car";

    // Constructor
    public function __construct($brand, $color = "none") {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method

    public function getCarInfo($brand, $color){
        return "Brand: " . $this->brand . ", Color: " . $this->color;
    }
    
}