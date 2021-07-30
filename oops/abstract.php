<?php

    /**
     * The Audi, Volvo, and Citroen classes are inherited from the Car class. This means that 
     * the Audi, Volvo, and Citroen classes can use the public $name property as well as the 
     * public __construct() method from the Car class because of inheritance.
     * 
     * But, intro() is an abstract method that should be defined in all the child classes and 
     * they should return a string.
     */

    // Parent class
    abstract class Car {
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
        abstract public function intro() : string;
    }

    // Child classes
    class Audi extends Car {
        public function intro() : string {
            return "Choose German quality! I'm an $this->name!";
        }
    }

    class Volvo extends Car {
        public function intro() : string {
            return "Proud to be Swedish! I'm a $this->name!";
        }
    }

    class Citroen extends Car {
        public function intro() : string {
            return "French extravagance! I'm a $this->name!";
        }
    }

    // Create objects from the child classes
    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo = new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $citroen = new citroen("Citroen");
    echo $citroen->intro();

?>