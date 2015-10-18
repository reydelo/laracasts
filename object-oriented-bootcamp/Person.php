<?php

class Person {

  private $name;

  // ideally, we want to hide as much information about the class as we can
  private $age;

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

// now you cannot set this because the age property is private
$john->age = 3;

var_dump($john->getAge());

?>
