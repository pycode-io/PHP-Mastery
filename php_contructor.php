<?php
class Car
{
    public $name; // Property to store the car name
    public $colour; // Property to store the car color

    // Constructor method with default value for color
    public function __construct($car_name, $car_colour = 'black')
    {
        $this->name = $car_name; // Set the car name using the provided argument
        $this->colour = $car_colour; // Set the car color using the provided argument
    }

    // Method to get the car name
    public function getCarName()
    {
        return "My favorite car is " . $this->name; // Returns the formatted car name
    }
}

// Creating an object of the Car class and passing car name and color to the constructor
$mycar = new Car('BMW', 'blue'); // Providing both car name ('BMW') and color ('blue')

// Debugging: Printing the default car name and color
echo "Default car name: " . $mycar->name . " And color is: " . $mycar->colour . "<br>";

// Accessing the new car name using the getCarName method
$carNameFormatted = $mycar->getCarName();

// Debugging: Printing the formatted car name
echo "Formatted car name: " . $carNameFormatted;


?>
