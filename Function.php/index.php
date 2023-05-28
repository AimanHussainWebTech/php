<?php

// What is a class in PHP?
// Classes are the blueprints of objects.Class is a collection of objects.. 
// classes are designed to perform one or more task .
// A class defined once can be used to create number of objects

#example;
 
#syntax of php class:

class car #=> name of the class
{
    public $name,$color,$model,$company; #properties 
    //methods  
    function set_data($name,$color,$model,$company){
        $this->name=$name;
        $this->color=$color;
        $this->model=$model;
        $this->company=$company;
    }

    function getdata(){
        echo $this->name."<br>";
        echo $this->color."<br>";
        echo $this->model."<br>";
        echo $this->company."<br>";

    }

}



// How do you create an object from a class in PHP?

// Objects of a class are created using the new keyword.
 
// creating objects of classes :
$sportcars=new car();
$sportcars->set_data("sportcar","yellow","2020","Mazda MX-5");
$sportcars->getdata();

// What is a constructor in PHP and when is it called?
// A constructor allows you to initialize an object's properties upon creation of the object. If you create a __construct() function, PHP 
// will automatically call this function when you create an object from a class.
//  Notice that the construct function starts with two underscores (__)!

// creating a constructor function

class books{
    public $name,$pages,$author,$cover,$typography;
    // What is the syntax for creating a constructor method in PHP?
   // syntax:
    function __construct($name,$pages,$author,$cover,$typography){
      $this->name=$name; 
      $this->pages=$pages;      
      $this->author=$author;      
      $this->cover=$cover;      
      $this->typography=$typography;
      

    }
    // What is the syntax for creating a destructor method in PHP?
    // syntax:
    function __destruct() #to destroy the object use this function
    {
        echo "function destruct";
    }

    }

    $book= new books("atomic habits","250","james charles","white","sans serif");
    print_r($book);    


 


