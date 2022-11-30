<?php
interface person{
    public function eat();
    public function marry();
}
class boys implements person{
    public function eat()
    {
        echo "Boys are eating Dryfruits";
        echo "</br>";
    }
    public function marry()
    {
        echo "All boys are Unmarried.";
    }
}

class girls implements person{
    public function eat()
    {
        echo "Girls are eating Fruits";
        echo "</br>";
    }
    public function marry()
    {
        echo "All Girls are Married.";
    }
}



$jay= new boys;
$jay->eat();
$jay->marry();

$kiran = new girls;
$kiran->eat();
$kiran->marry();
?>