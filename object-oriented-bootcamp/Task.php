<?php

class Task {
  // is it necessary to define these properties outside of the constructor function?
  public $title;
  public $description;
  public $completed = false;

  public function __construct($description, $title=null)
  {
    // offer the option to pass through a title as the first argument
    if($title) {
      $this->title = $description;
      $this->description = $title;
    }
    else {
      $this->description = $description;
    }
  }

  public function complete()
  {
    $this->completed = true;
  }
}

// arg 1 = description
$task = new Task("Here's what I have to do");
$task->complete();
var_dump($task);

// arg 1 = title, arg 2 = description
$taskWithTitle = new Task('Learn OOP', 'Define a Class');
var_dump($taskWithTitle);

// will throw error for missing arg 1
$taskWithNothing = new Task();
// prints out task with "description"=NULL
var_dump($taskWithNothing);

?>
