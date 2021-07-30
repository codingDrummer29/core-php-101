<?php 

    // The __construct() and intro() methods in the child class (Strawberry) will override the 
    // __construct() and intro() methods in the parent class (Fruit)

    class FruitIO {
        public $name;
        public $color;

        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }
    
    class Strawberry extends FruitIO {
        public $weight;

        public function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }
        
        public function intro() {
            echo "The fruit is {$this->name}, 
            the color is {$this->color}, 
            and the weight is {$this->weight} gram.";
        }
    }
    
    $strawberry = new Strawberry("Strawberry", "red", 50);
    $strawberry->intro();

    // op The fruit is Strawberry, the color is red, and the weight is 50 gram.

?>