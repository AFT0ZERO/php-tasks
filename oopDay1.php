<pre>
<?php
class Car{
  private $VIN;
  private $Make;
  private $Model;

  function __construct($VIN,$Make,$Model){
    $this->VIN = $VIN;
    $this->Make = $Make;
    $this->Model = $Model;
  }
  function __destruct()
  {
    echo "the car object was destroyed";
  }

  function getDetails(){
    return "VIN: {$this->VIN},  Make: {$this->Make} ,Model: {$this->Model}";
  }

 // *getter
  function getVIN(){
    return $this->VIN;
  }
  function getMake(){
    return $this->Make;
  }
  function getModel(){
    return $this->Model;
  }

  // *setter
  function setVIN($VIN){  
    $this->VIN = $VIN;  
  }
  function setMake($Make){  
    $this->Make = $Make;  
  }
  function setModel($Model){  
    $this->Model = $Model;  
  }

}

class Inventory {
  private $Cars=[];
 
   function addCar($car) {
   array_push($this->Cars,$car);
}
 function removeCarByVIN($VIN) {
  foreach ($this->Cars as $key => $car) {
      if ($car->getVIN() === $VIN) {
          unset($this->Cars[$key]);
      }
  }
}
 function listCars() {
  $list = array();
  foreach ($this->Cars as $car) {
      $list[] = $car->getDetails();
  }
  return $list;
}
}

$car1 = new Car("VIN200212","bmw", "x5" );
$car2 = new Car("VIN100220","toyota", "camry" );
$car3 = new Car("VIN123456","mg", "test" );
$inventory = new Inventory();


$inventory->addCar($car1);
$inventory->addCar($car2);
$inventory->addCar($car3);

print_r($inventory->listCars());

$inventory->removeCarByVIN("VIN100220");

print_r($inventory->listCars());
?>
</pre>