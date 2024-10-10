<?php
include 'Vehicle.php';

class Bus extends Vehicle {
    public $capacity = 50;

    public function fare() {
        $totalFare = $this->capacity * 100;
        return $totalFare + ($totalFare * 0.1); // Add 10% maintenance
    }
}
?>
