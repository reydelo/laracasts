<?php
// base class, parent class
class Mother {
  public function getEyeCount()
  {
    return 2;
  }
}

//child class, sub class
class Child extends Mother {

}

echo (new Child)->getEyeCount();

// Add functionality here, but don't expect to instantiate
abstract class Shape {
  protected $color;
  public function __construct($color = 'red')
  {
    $this->color = $color;
  }

  public function getColor()
  {
    return $this->color;
  }

  //template method design pattern - any subclass must provide the logic for this method
  abstract protected function getArea();
}

class Square extends Shape {
  protected $length = 4;

  public function getArea()
  {
      return pow($this->length, 2);
  }
}

class Triangle extends Shape {
  protected $base = 4;

  protected $height = 7;

  // this will take precedence over the parent class
  public function getArea()
  {
      return .5 * $this->base * $this->height;
  }
}

class Circle extends Shape {
  protected $radius = 5;

  public function getArea()
  {
    return pi() * pow($this->radius, 2);
    // return M_PI * pow($this->radius, 2);
  }
}

// shorthad for $square = new Square; echo $square->getArea();
echo (new Square)->getArea();

echo (new Triangle)->getArea();

echo(new Circle)->getArea();

echo (new Square('green'))->getColor();


abstract class Mailer {
  public function send($to, $from, $body)
  {

  }
}

class UserMailer extends Mailer {
  public function sendWelcomeEmail()
  {
    return $this->send($user->email);
  }
}

class AdminMailer extends Mailer {

}
?>
