<?php
  $object1 = new User();
  $object1->name = "Amy";
  $object2       = $object1;
  $object2->name = "Alice";

  print_r($object1);
  echo "<br>";
  print_r($object2);
  echo "<br>";

  echo "object1 name =" . $object1->name . "<br>";
  echo "object2 name =" . $object2->name . "<br>";

  class User{
    public $name;
  }

 $A = new A();
 $A->callme();

Class A
{
  public $myname;    //this is a member variable of this class

  function callme(){
    $myname='Function variable';
    $this->myname='Member variable';
    echo $myname . "<br>";                  //prints function variable
    echo $this->myname;              //prints member variable
  }
}

  $paper[] = "Copier";
  $paper[] = "Inkjet";
  $paper[] = "Laser";
  $paper[] = "Photo";

  for($j = 0 ; $j < 4 ; ++$j){
    echo "$j: $paper[$j]<br>";
  }
?>
