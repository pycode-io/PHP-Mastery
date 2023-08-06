<?php

// Define the parent class Cars
class Cars
{
    // Public property accessible from anywhere
    public $name;
    // Protected property accessible within the class and its subclasses
    protected $model;
    // Private property accessible only within the class
    private $colour;

    // Constructor to initialize properties
    public function __construct($name, $model, $colour)
    {
        $this->name = $name;
        $this->model = $model;
        $this->colour = $colour;
    }

    // Method to display engine type
    public function enginePoweredBy()
    {
        echo "Diesel engine";
    }

    // Method to display car details
    public function carDetails()
    {
        echo $this->name . "<br/>";
        echo $this->model . "<br/>";
        echo $this->colour . "<br/>";
        echo $this->owner . "<br/>";
    }
}

// Define the child class BMW
class BMW extends Cars
{
    // Public property specific to BMW class
    public $owner;

    // Override the constructor
    public function __construct($name, $model, $colour, $owner)
    {
        // Call the parent constructor to set name, model, and colour
        parent::__construct($name, $model, $colour);
        // Set the owner property for BMW
        $this->owner = $owner;
    }

    //anothe way 
    // public function __construct($name, $model, $colour, $owner)
    // {
    //     $this->name = $name;
    //     $this->model = $model;
    // private property not accessible here
    //     $this->colour = $colour;
    //     // Set the owner property for BMW
    //     $this->owner = $owner;
    // }

    // Override method to display BMW's engine type
    public function enginePoweredBy()
    {
        echo "Petrol engine";
    }
}

// Create an instance of BMW
$bmw = new BMW("BMW", "BMW X5", "Black", 'Pradeep Yadav');

// Display car details using carDetails() method
echo "Car Details:<br/>";
$bmw->carDetails();

// Display engine type using enginePoweredBy() method
echo "Engine Type: ";
$bmw->enginePoweredBy();
