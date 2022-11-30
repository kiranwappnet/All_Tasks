<?php
class Manager{
    public function que(){
        echo "Did You Complete all tasks??";
    }

}
class Employee extends Manager{
    public function reply(){
        echo "Yes sir I have completed..";
    }
}
$emp1 = new Employee;
$emp1->que();
echo "</br>";
$emp1->reply();

?>