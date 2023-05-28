<?php

// What is a destructor in PHP and when is it called?
// A destructor is called when the object is destructed or the script is stopped or exited. 
// If you create a __destruct() function, PHP will automatically call this function at the end of the script.
//   syntax written  in class books

// How do you access properties of an object in PHP?
// To invoke a method on an object, you simply call the object name followed by "->" and
//  then call the method. Since it's a statement, you close it with a semicolon.
//  When you are dealing with objects in PHP, the "->" is almost always used to access that object, whether it's a property or to call a method

// What is the difference between a constructor and a destructor in PHP?
// 
// Can a class have multiple constructors in PHP?
// A class can have multiple constructors that differ in the number and/or type of their parameters. 
// It's not, however, possible to have two constructors with the exact same parameters.

// Overloading cannot be performed with destructors and only a single destructor can exist in the same class.
//  Another unique feature of it is that even if the script has stopped its execution with the help of an exit()
//   command, the destructor will still be called

// Can you pass arguments to a constructor in PHP?
// Like any other function, a constructor can also define some arguments that the developer may need later in the program.

// How do you destroy an object in PHP?
// by using destruct function we can destroy an object of a class

//Can you create an object without calling the constructor in PHP?
// De-Serialization creates objects without calling constructors. We can use the same mechanism to create objects at will, without ever calling their constructors


// What is the purpose of using a constructor in PHP?
//  A constructor is used in classes to initialize data members of class in order to avoid errors/segmentation faults.

// What is the purpose of using a destructor in PHP?
// A destructor is called when the object is destructed or the script is stopped or exited.

?>

