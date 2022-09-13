<?php
// class Fruit {
//     protected $name;
//     public $color;
//     public function __construct($name, $color) {
//       $this->name = $name;
//       $this->color = $color;
//     }
//     public function intro() {
//       echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
//   }
  
//   // Strawberry is inherited from Fruit
//   class Strawberry extends Fruit {
//     public function message() {
//       echo "Am I a fruit or a berry? ";
//     }
//     public function test(){
//         return $this->name;
//     }
//   }
//   $strawberry = new Strawberry("banana", "yellow");
//   echo $strawberry->test();

// GrandParent
class BrewCoffee{

  public function brewCoffee()
  {
    return 1;
  }

  public function test()
  {
    return $this->brewCoffee();
  }
}
// Parent 
class BrewLate extends BrewCoffee
{
  public function brewLate()
  {
    return $this->brewCoffee();
  }
}
// Children
class BrewCappuccino extends BrewLate
{}

$test = new BrewCoffee();
echo ($test->brewCoffee());



































