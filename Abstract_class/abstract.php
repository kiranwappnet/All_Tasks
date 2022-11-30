<?php
Abstract class Room{
    
    abstract protected function buy();
    abstract protected function rent();
}
class Person extends Room{
    public function buy(){
        echo "Room Purchased..";
        echo "</br>";

    }
    public function rent(){
        echo "Total Amount of rent is 15,000";
    }

}

$p = new Person();
$p->buy();
$p->rent();
?>