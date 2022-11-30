<?php 
trait Person{
    public function boy(){
        echo "Hello I m a boy";
        
    }
}

    class Ram{
        use Person;
    }
    class Jay{
        use Person;
    }

$gender = new Ram();
$gender = new Jay();
$gender->boy();
echo "</br>";
$gender->boy();
?>