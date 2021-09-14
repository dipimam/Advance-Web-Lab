<?php
class student{
  public $Name="";
  public $Id;
  public $Dob;
  public $course= array();

  function ShowInfo()
  {
    echo "Student name is $this->Name <br />";
    echo "Student Id is $this->Id <br />";
    echo "Student DOB is $this->Dob <br />";

  }
  function AddCourse($Coursename)
  {
    array_push($this->course,$Coursename);
  }

  function ShowAllCourse()
  {
    echo "Student name is $this->Name <br />";
    echo "Student Id is $this->Id <br />";
    echo "Taken courses are <br />";
    foreach( $this->course as $var )
      {
  echo "$var <br />";

       }
  }

 }

$s1= new student;
$s1->Name= "dip";
$s1->Id= "19-40354-1";
$s1->Dob= "20/11";
$s1->ShowInfo();
$s1->AddCourse("ATP3");
$s1->AddCourse("ATP2");
$s1->ShowAllCourse();
 ?>
