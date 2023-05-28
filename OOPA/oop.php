<?php 
// 1.	Create a class called "Person" that has properties for first name, last name,
//  and age. Add methods for getting and setting each of these properties.
 class person{
     public $firstName,$lastNmae,$age;

     function __construct($firstName,$lastName,$age){
         $this->firstName=$firstName;
         $this->lastName=$lastName;
         $this->age=$age;

     }
     function getdata(){
         echo $this->firstName;
         echo $this->lastName;
         echo $this->age;

     }
 }
$p1=new person ("Aiman","Anwer","15") ;
$p1->getdata();

// 2.	Create another class called "Employee" that inherits from the "Person" class.
//  Add a property for the employee's job title and a method for getting and setting it.

class Employee extends person{
    public $jobtitle ;
    function setjobtitle($jobtitle){
        $this->jobtitle=$jobtitle;
    }
    function getdata(){
        echo $this->firstName."<br>";
        echo $this->lastName."<br>";
        echo $this->age."<br>";
        echo $this->jobtitle."<br>";

    }
}
$pm1=new Employee("Ahmed","Anwer","17");
$pm1->getdata();
// 3.	Create a class called "Car" that has properties for make, model, year, and color. 
// Add methods for getting and setting each of these properties

class Car{
    public $modle,$year,$color;
    function __construct($modle,$year,$color){
        $this->modle=$modle;
        $this->year=$year;
        $this->color=$color;
    }
    function getdata(){
       echo $this->modle."<br>";
       echo $this->year."<br>";
       echo $this->color."<br>";
    }
}
$m1car=new Car("farari","2021","red");
$m1car->getdata();

// 4.	Create a class called "BankAccount" that has properties for the account balance and owner.
//  Add methods for depositing and withdrawing money from the account.

class Bankaccount{
    public $balance,$onwer;
    function __construct($owner) {
        $this->owner=$owner;
        $this->balance =0; 
    }
    function deposit($balance){
        $this->balance+=$balance;
    }
    function widthdraw($balance){
        $this->balance-=$balance;
    }
      }
    $aiman=new Bankaccount("aiman");
    $aiman->deposit("20000");
    $aiman->widthdraw("10000");

     echo $aiman->balance;

// 5.	Create a class called "Rectangle" that has properties for the length and width.
//  Add methods for calculating the area and perimeter of the rectangle.

class rectangle {
    public $length,$width,$area,$perimeter;
    function __construct($length,$breadth){
      $this->length=$length;
      $this->width=$breadth;
    }
    function area($length,$breadth){
      
      $this->area=bcmul($length,$breadth);

    }
    function perimeter($length,$breadth){
      $this->perimeter=2*($length+$breadth);
    }
    function getdataA(){
        echo "length"."=".$this->length."<br>";
        echo "width"."=".$this->width."<br>";
        echo "area"."=".$this->area."<br>";
    }
    function getdataP(){
        echo "length"."=".$this->length."<br>";
        echo "width"."=".$this->width."<br>";
        echo "perimeter"."=".$this->perimeter."<br>";
    }
}


$area=new rectangle(10,40);
$area->area(10,40);
$area->getdataA();
echo "<br>";echo "<br>";


$p=new rectangle(10,40);
$p->perimeter(10,40);
$p->getdataP();







?>

