<?php

class employee{
    public $employeeId,$employeeName,$employeeSalary,$employeeDept;
    function setdata( $employeeId,$employeeName,$employeeSalary,$employeeDept){
        $this->employeeId=$employeeId;
        $this->employeeName=$employeeName;
        $this->employeeSalary=$employeeSalary;
        $this->employeeDept=$employeeDept;

    }
    function getdata(){
       echo $this->employeeId."<br>";
        echo$this->employeeName."<br>";
       echo $this->employeeSalary."<br>";
       echo $this->employeeDept."<br>";
        
    }
    function __construct($employeeId,$employeeName,$employeeSalary,$employeeDept)
    {
      $this->employeeId=$employeeId;
      $this->employeeName=$employeeName;
      $this->employeeSalary=$employeeSalary;
      $this->employeeDept=$employeeDept;
  
    }
  
    function __destruct()
    {
        echo "Destruct Function";
    }
}
 $emp1=new employee("1","aiman","1500000","IT");
  $emp1->getdata();
  "<br>";
  "<br>";
  $emp2=new employee("2","areeba","15000","IT");
  $emp2->getdata();

?>