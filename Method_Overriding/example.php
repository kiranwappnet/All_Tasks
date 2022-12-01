<?php
    // parent class
    class Software_Developer {
        // public property name
        private $name;
        
        // public method

        public function setname($name){
            $this->name = $name;
        }
        public function salary() {
            echo "Hi My Name Is " .$this->name. " My salary is 45,000 Per month..<br/>";
        }
    }
    
    // child class
    class Mobile_Developer extends Software_Developer {
        
        public function salary() {
            echo "Hi My Name Is " .$this->name.  " My salary is 50,000 Per month..<br/>";
        }
        
    }
    
    // child class
    class Node_js extends Software_Developer {
        
        public function salary() {
            echo "Hi My Name Is " .$this->name. " My salary is 55,000 Per month..<br/>";;
        }
        
    }
    
    $new = new Software_Developer();
    $new->setname("KIRAN");
    
    
    // calling child class method
    
    $new->salary();
    
    $S_new = new Mobile_Developer();
    $S_new->name = "Riddhi Mahera";
    
    // calling child class method
    $S_new->salary();

    $T_new = new Node_js();
    $T_new->name = "Sonali Joshi";

    $T_new->salary();
    
?>