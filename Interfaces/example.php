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
$jay= new boys;
$jay->eat();
$jay->marry();
?>