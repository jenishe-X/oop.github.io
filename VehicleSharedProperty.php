<?php
class Vehicle {
    
    public static $wheels = 4;  // Shared property for all classes

    public function getWheels() {
        return self::$wheels;
    }
}

class Bus extends Vehicle {
    // Inherits shared property
}

class Car extends Vehicle {
    // Inherits shared property
}
?>
