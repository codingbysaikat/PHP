<?php 
include "inc/header.php"; 

//Abstract Class

 abstract class Student{

  public $name;
  public $age;

  public function details(){
    echo $this->name. " is " . $this->age . " years old <br>";
  }

  abstract public function School();

 }


class Boy extends Student{

    public function describe(){

      return parent::details(). "And I am a high school student.<br>";

    }

    public function School(){

      return "I like to read story book.";
    }

}



 $s = new Boy();
 $s->name ="kamal";
 $s->age = "15";
 echo $s->describe();
 echo $s->School();


















 include "inc/footer.php"; 

 ?>