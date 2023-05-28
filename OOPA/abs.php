<?php
//1. Create an abstract class called "Shape" that has an abstract method called "calculateArea".
//  Then, create concrete classes for different shapes such as "Rectangle", "Triangle", and "Circle",
//  that implement the "calculateArea" method.
abstract class Shape{
  public $length, $breath;  
    public  $height,$base;
    public  $r;

    abstract public function CalculateArea();   

    function __construct($length,$breath){
      $this->length=$length;
      $this->breath=$breath;

 }

} 
 class Rectangle extends Shape{
   
   public  function CalculateArea(){
      return $this->length*$this->breath;
    }
    
   
    
  }
  class Triangle extends Shape{
    function CalculateArea(){
      return 1/2*$this->height*$this->base;
    }
    function __construct($height,$base){
      $this->height=$height;
      $this->base=$base;
    
    }
}
class Circle extends Shape{
    function CalculateArea(){
      return pi()*$this->r*$this->r;
    }
    function __construct($r){
      $this->r=$r;
    
    }
}

$rect=new Rectangle(20,30);
echo "area of rectangle ".$rect->CalculateArea();
echo "<br>";
echo "<br>";

$tri=new Triangle(20,30);
echo "area of triangle ".$tri->CalculateArea();
echo "<br>";
echo "<br>";
 
$c=new circle(20);
echo "area of circle ".$c->CalculateArea();
echo "<br>";
echo "<br>";



// Create an abstract class called "Animal" that has properties for the animal's name, age, and species.
//  Then, create concrete classes for different animals such as "Dog", "Cat", and "Horse", that inherit 
// from the "Animal" class.
Abstract class Animal{
  public abstract function MakeSound();
  public $name,$age,$species;

} 

class Dog extends Animal{
 public function MakeSound(){
 echo  "sound : Bark"."<br>";
 }
 function __construct($animal,$name,$species){
  $this->animal=$animal;
  $this->name=$name;
  $this->species=$species;
 }
 function getanimal(){
 echo "amnimal category ". ": ".$this->animal."<br>";
 echo "amnimal Name ". ": ".$this->name."<br>";
 echo "amnimal species ". ": ".$this->species."<br>";
 }
}
class Duck extends Animal{
  public function MakeSound(){
    echo  "sound".": "."Quack"."<br>";
  }
  
   function __construct($animal,$name,$species){
    $this->animal=$animal;
    $this->name=$name;
    $this->species=$species;
   }

   function getanimal(){
    echo "amnimal category ". ": ".$this->animal."<br>";
    echo "amnimal Name ". ": ".$this->name."<br>";
    echo "amnimal species ". ": ".$this->species."<br>";
    }
 }
 class Horse extends Animal{
  public function MakeSound(){
    echo  "sound".": "."Neigh"."<br>";
  }
  function __construct($animal,$name,$species){
    $this->animal=$animal;
    $this->name=$name;
    $this->species=$species;
   }
   function getanimal(){
    echo "amnimal category ". ": ".$this->animal."<br>";
    echo "amnimal Name ". ": ".$this->name."<br>";
    echo "amnimal species ". ": ".$this->species."<br>";
    }
   
}

$animal=new Dog("cat","chimpii","Abyssinian");
$animal->getanimal();
$animal->MakeSound();
echo "<br>";

$an=new Duck("dog","sam","Abyssinian");
$an->getanimal();
$an->MakeSound();
echo "<br>";
$animal=new Horse("cow","momo","Abyssinian");
$animal->getanimal();
$animal->MakeSound();
echo "<br>";
// 3. Create an interface called "Vehicle" that defines methods for getting the vehicle's details, such as "getMake", "getModel", and "getYear". Then, create concrete classes for different vehicles such as "Car", "Truck", and "Motorcycle", that implement the "Vehicle" interface.

interface Vehicle{
  public function getMake($brandName);
  public function getYear($modelYear);
  public function getMOdel($model);
}
class Car implements Vehicle{
  public $brandName,$modelYear,$model;
  // function __construct($brandName,$modelYear,$model){
  //   $this->brandname=$brandName;
  //   $this->modelYear=$modelYear;
  //   $this->model=$model;

  // }
   public function getMake($brandName){
          echo "model brand name".": ".$this->brandname=$brandName."<br>";
   }
   public function getYear($modelYear){
    echo "model year".": ".$this->modelyear=$modelYear."<br>";
          
   }
   public function getModel($model){
    echo "model  name".": ".$this->model=$model."<br>";
          
   }


}
class Truck implements Vehicle{
  public $brandName,$modelYear,$model;
  
   public function getMake($brandName){
          echo "model brand name".": ".$this->brandname=$brandName."<br>";
   }
   public function getYear($modelYear){
    echo "model year".": ".$this->modelyear=$modelYear."<br>";
          
   }
   public function getModel($model){
    echo "model  name".": ".$this->model=$model."<br>";
          
   }


}
$car= new Car();
$car->getMake("Porsche");
$car->getYear("2019 ");
$car->getModel("sportscar");
echo "<br>";

$truck=new  Truck();
$truck->getMake("toyota");
$truck->getYear("2020");
$truck->getModel("AM General");
echo "<br>";
echo "<br>";

// Create an abstract class called "Employee" that has properties for the employee's name, job title, and salary. Then, create concrete classes for different types of employees such as "FullTimeEmployee", "PartTimeEmployee", and "FreelanceEmployee", that inherit from the "Employee" class.
 abstract class Employee{
  public $empName,$jobtitle,$salary;

   public abstract function empinfo();
      
  }

 class FullTimeEmployee extends Employee{
  function __construct($empName,$jobtitle,$salary){
    $this->empName=$empName;
    $this->jobtitle=$jobtitle;
    $this->salary=$salary; 
  }
 public function empinfo(){
    echo "employee Name".": ".$this->empName. "<br>";
      echo "employee Name".": ".$this->jobtitle. "<br>";
      echo "employee Name".": ".$this->salary. "<br>";
  }
 }
 class PartTimeEmployee extends Employee{
  function __construct($empName,$jobtitle,$salary){
    $this->empName=$empName;
    $this->jobtitle=$jobtitle;
    $this->salary=$salary; 
  }
 public function empinfo(){
    echo "employee Name".": ".$this->empName. "<br>";
      echo "employee Name".": ".$this->jobtitle. "<br>";
      echo "employee Name".": ".$this->salary. "<br>";
  }
 } 
 class freelanceEmployee extends Employee{
  function __construct($empName,$jobtitle,$salary){
    $this->empName=$empName;
    $this->jobtitle=$jobtitle;
    $this->salary=$salary; 
  }
 public function empinfo(){
    echo "employee Name".": ".$this->empName. "<br>";
      echo "employee Name".": ".$this->jobtitle. "<br>";
      echo "employee Name".": ".$this->salary. "<br>";
  }
 } 
 

 $emp=new FullTimeEmployee("areeba","developer","50000");
 $emp->empinfo();
 echo "<br>";
 $emp=new PartTimeEmployee("aiman","data scientist","50000");
 $emp->empinfo();
 echo "<br>";
 $emp=new freelanceEmployee ("maheen","digital marketing","50000");
 $emp->empinfo();
 echo "<br>";
//  Create an interface called "PaymentMethod" that defines methods for making a payment, such as "pay" and "getPaymentDetails". Then, create concrete classes for different payment methods such as "CreditCard", "DebitCard", and "PayPal", that implement the "PaymentMethod" interface.

interface PaymentMethod{
  function pay($amount);
  function getpaymentDetails();  
}
class Credit implements paymentMethod{
    public $Baccount,$method;
    function __construct($bank,$method){
      $this->Baccount=$bank;
      $this->method=$method;   

    }
    function pay($amount){
      echo "payment".": ".$amount."<br>";
    }
   function getpaymentDetails(){
    echo "bank account".": ".$this->Baccount."<br>";
    echo "payment method".": ".$this->method."<br>";
   } 
}
class Debit implements paymentMethod{
  public $Baccount,$method;
  function __construct($bank,$method){
    $this->Baccount=$bank;
    $this->method=$method;   

  }
  function pay($amount){
    echo "payment".": ".$amount."<br>";
  }
 function getpaymentDetails(){
  echo "bank account".": ".$this->Baccount."<br>";
  echo "payment method".": ".$this->method."<br>";
 } 
}
class payPal implements paymentMethod{
  public $Baccount,$method;
  function __construct($bank,$method){
    $this->Baccount=$bank;
    $this->method=$method;   

  }
  function pay($amount){
    echo "payment".": ".$amount."<br>";
  }
 function getpaymentDetails(){
  echo "bank account".": ".$this->Baccount."<br>";
  echo "payment method".": ".$this->method."<br>";
 } 
}
$pay= new Debit("MEZAN BANK","debit");
$pay->pay(20000);
$pay->getpaymentDetails();
echo "<br>";


$pay= new Credit("MEZAN BANK","credit");
$pay->pay(19000);
$pay->getpaymentDetails();
echo "<br>";



$pay= new Credit("MEZAN BANK","paypal");
$pay->pay(76000);
$pay->getpaymentDetails();
echo "<br>";







?>