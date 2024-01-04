<?php
class Car // create class
{
    private $wheels = 10;// declare variable
    public function drive()
    {
        echo "car is driving.";
    }

    public function getCar(){
        return $this->wheels;
    }
    
    public function setCar($value){
        return $this->wheels= $value;
    }
}
$car1 = new Car; //create object
// echo $car1-> wheels;
echo $car1->setCar(4);
echo $car1->getCar();

?>
