<?php
    // parent class
    class Vehicle {
        // protected property name
        private $name;
        
        // public function start
        public function start() {
            echo $this->name. " - Engine start...<br/>";
        }
        
        // public function stop
        public function stop() {
            echo $this->name. " - Engine stop...<br/>";
        }
    }
    
    // child class
    class Car extends Vehicle {
        
        public function drive() {
            // accessing name variable of Car class
            echo "I am " . $this->name . "<br/>";
            echo "Lets go on a drive...";
        }
        
    }
    
    
    $car = new Car();
    $car->name = "Kiran Ramchandani";
    
    // calling parent class method
    $car->start();
    
    // calling child class method
    $car->drive();
    
?>