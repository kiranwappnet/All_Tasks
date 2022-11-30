<?php
Abstract class Room{
    public $color;
    abstract protected function house();
    abstract protected function rent();
}
class Person extends Room{
    public function house(){
        echo "Seeta and Geeta are staying";
        echo "</br>";

    }
    public function rent(){
        echo "Total Amount of rent is 15,000";
    }

}

$p = new Person();
$p->house();
$p->rent();
?>