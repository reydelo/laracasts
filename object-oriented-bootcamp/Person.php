<?php

class Person {

  public $name;

  public $age;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getAge()
  {
    // new hook to introduce some kind of specific behavior
    return $this->age * 365;
  }

  public function setAge($age)
  {
    if($age < 18)
    {
      // creates a hook if argument does not meet conditions
      throw new Exception("Person is not old enough");
    }
    $this->age = $age;
  }

}

$john = new Person('John Doe');

$john->setAge(30);

// the conditions in setAge() are bypassed by directly setting the age property....
$john->age = 3;

var_dump($john->getAge());

?>
