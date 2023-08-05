<?php
class Car
{
    public $name = 'BMW'; // Default car name is set to 'BMW'

    // Method to get the car name
    public function getCarName()
    {
        return "My favorite car is " . $this->name; // Returns the formatted car name
    }

    // Method to set the car name
    public function setCarName($car_name)
    {
        $this->name = $car_name; // Sets the provided car name
    }
}

// Creating an object of the Car class
$mycar = new Car();

//Printing the default car name
echo "Default car name: " . $mycar->name . "<br>";

// Change and print the car name to 'Volkswagen'
$mycar->name = "Volkswagen";
echo "New car name: " . $mycar->name . "<br>";

// Using the setCarName method to change the car name
$mycar->setCarName("Range Rover");

//Printing the updated car name
echo "Updated car name: " . $mycar->name . "<br>";

// Accessing the new car name using the getCarName method
$carNameFormatted = $mycar->getCarName();

//Printing the formatted car name
echo "Formatted car name: " . $carNameFormatted;
