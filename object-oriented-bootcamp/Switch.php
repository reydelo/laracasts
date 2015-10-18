<?php
// Switch is a reserved word!
class LightSwitch {
  public function on()
  {

  }

  public function off()
  {

  }

  // we are concerned with hiding information: ENCAPSULATION
  // private: this method may only and exclusively be accessed within this class
  private function connect()
  {

  }

  // protected: this method may be extended through inheritance to subclasses
  protected function activate()
  {

  }

}

$switch = new Switch;
$switch->connect();

?>
