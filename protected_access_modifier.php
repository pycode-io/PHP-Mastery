<?php 

class Vehicle {
    protected $fuelLevel = 50;
    
    protected function refuel() {
        
        return $this->fuelLevel;
    }
}

class Bike extends Vehicle {
    public function drive() {
       echo "The fuel level of the bike is: ".$this->refuel(); // Accessing the protected method from the subclass
    }
}

$myBike = new Bike();
// Protected members cannot be accessed directly:
// $myBike->fuelLevel = 50; // Error: Cannot access protected property
// $myBike->refuel();       // Error: Cannot access protected method
$myBike->drive();         // Accessing the public method that uses the protected method
