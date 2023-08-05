<?php 

class Bike {
    private $engineStatus = 'running';
    public function __construct()
    {
       echo $this->checkEngine();
        
    }
    private function checkEngine() {

       return "The status of the engine is: ".$this->engineStatus;
    }


}

$myCar = new Bike();
// Accessing private members would result in an error:
// $myCar->engineStatus = 'running'; // Error: Cannot access private property
// $myCar->checkEngine();            // Error: Cannot access private method
