<?php
class Vehicle {
private $color;

public function setColor($color) {
$this->color = $color;
}

public function getColor() {
return $this->color;
}
}

class Car extends Vehicle {
private $steeringWheel;

public function setSteeringWheel($steeringWheel) {
$this->steeringWheel = $steeringWheel;
}

public function getSteeringWheel() {
return $this->steeringWheel;
 }
}

$obj = new Car();

$obj->setColor("Black");
$obj->setSteeringWheel("Leather");


$color = $obj->getColor();
$steeringWheel = $obj->getSteeringWheel();

printf("Color = %s and SteeringWheel = %s", $color, $steeringWheel);
?>