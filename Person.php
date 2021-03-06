<?php
class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;
  
  function __construct($name, $lastname, $age, $mother = null, $father = null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    
    $this->hp = 100;
  }
  function sayHi($name)
  {
    return "Hi $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName()
  {
    return $this->name;
  }
  function getMother()
  {
    return $this->mother;
  }
  function getFather()
  {
    return $this->father;
  }
  function getInfo(){
    return "
    <h3>A few words about myself:</h3><br>"."My name is: ".$this->getName()."<br> my lastname is: ".$this->getLastname()."<br> my father is: ".$this->getFather()->getName();

  }
}
$igor = new Person("Igor", "Petrov", 68);
$oleg = new Person("Oleg", "Ivanov", 69);
$anna = new Person("Anna", "Petrova", 65);
$alla = new Person("Alla", "Ivanova", 65);
$alex = new Person("Alex", "Ivanov", 42, $alla, $oleg);
$olga = new Person("Olga", "Ivanova", 42, $anna, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getName() . "<br>";
echo $valera->getMother()->getName() . "<br>"; 
echo $valera->getFather()->getName() . "<br>";
echo $valera->getMother()->getMother()->getName() . "<br>";
echo $valera->getMother()->getFather()->getName() . "<br>";
echo $valera->getFather()->getMother()->getName() . "<br>";
echo $valera->getFather()->getFather()->getName();


// $igor = new Person("Igor", "Petrov", 38);
// echo $alex->sayHi($igor->name);
// $alex->name = "Alex";
// echo $alex->name;
// $medKit = 50;

// $alex->setHp(-30); //Упал
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit);
// echo $alex->getHp();