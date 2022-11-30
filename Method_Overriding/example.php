<?php
class Student{
    function show(){
        echo "Student shows their all records";
    }
}
class Employee extends Student{
    function show(){
        echo "Employee shows their all records";
    }

}
$ram = new Student;
$ram->show();

echo "</br>";

$teacher = new Employee;
$teacher->show();

?>