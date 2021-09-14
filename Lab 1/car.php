<?php
class car{

  public   $EngineNo;
  public $Model;
  public $Owner;

  function __construct($engineno,$model,$owner){
   $this->EngineNo=$engineno;
   $this->Model=$model;
   $this->Owner=$owner;
  }
  function ShowInfo()
  {
    echo "Engine no is $this->EngineNo <br />";
    echo "Model is $this->Model <br />";
    echo "Owner is $this->Owner <br />";
  }
}

$car= new car("1965333","BMW i8","dip");
$car->ShowInfo();
 ?>
