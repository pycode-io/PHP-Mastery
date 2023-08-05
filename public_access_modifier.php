<?php
class Bike
{
    public $name;

    public function startEngine()
    {

        return "My Favorite Bike Is " . $this->name;
    }
}

$myBike = new Bike();
$myBike->name = 'Continental GT650'; // Accessing the public property
echo $myBike->startEngine();   // Accessing the public method

// here we are accessing the public propeperty outside of the class.